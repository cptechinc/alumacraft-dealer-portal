<?php namespace Aluma\Sdr;
// Aluma
use Aluma\Sdr\Db;
use Aluma\Util\Data;
use Aluma\Util\PhpSession;

/**
 * Session
 * Handles / Contains SDR User Data for Session
 */
class Session extends Data {
/* =============================================================
	Getters
============================================================= */
	/**
	 * Return if User is Logged In
	 * @return bool
	 */
	public static function isLoggedIn() {
		return PhpSession::has('sdruser');
	}

	/**
	 * Return User
	 * @return User|false
	 */
	public static function getUser() {
		$data = PhpSession::get('sdruser');

		if (empty($data)) {
			return false;
		}
		$user = new User();
		$user->setArray($data);
		return $user;
	}

	private static function saveUser(User $user) {
		// if (PhpSession::has('sdruser')) {
		// 	PhpSession::remove('sdruser');
		// }
		return PhpSession::set('sdruser', $user->getArray());
	}

/* =============================================================
	Public Processing
============================================================= */
	public static function process(Data $data) {
		if (Db\Sessions::exists($data->sessionid, $data->userid) === false) {
			return false;
		}

		$user = new User();
		$user->sessionid  = $data->sessionid;
		$user->userid     = $data->userid;

		if (Db\Users::exists($user->userid)) {
			self::setupUserSdrUserLegacy($user);
			self::saveUser($user);
			return true;
		}

		// Attempt Salesforce User parsing
		$session = Db\Sessions::getSession($user->sessionid);

		if (empty($session['salesforce_user_id'])) {
			return false;
		}
		self::setupUserFromSalesforce($user, $session);
		self::saveUser($user);
		return true;
	}

/* =============================================================
	Default
============================================================= */
	/**
	 * Parse User Details from SDR User's Table
	 * @param  User  $user
	 * @return bool
	 */
	private static function setupUserSdrUserLegacy(User $user) {
		$sdrUser = Db\Users::getUser($user->userid);
		$user->name       = $sdrUser['name'];
		$user->email      = $sdrUser['email'];
		$user->locationid = $sdrUser['location_id'];
		$user->role       = Db\Roles::getSimpleRoleByUserid($user->userid);
		$user->roleid     = Db\Roles::getHighestRole($user->userid);
		self::setupUserDplusCustid($user);
		self::setupUserCustids($user);
		self::setupUserAccess($user);
		return true;
	}

	/**
	 * Set User Access Levels
	 * @param  User $user
	 * @return void
	 */
	private static function setupUserAccess(User $user) {
		$user->sdraccess = Db\UserAccess::getLevels($user->userid);
	}

	/**
	 * Set User's Dplus Customer ID from their Location
	 * @param  User   $user
	 * @return void
	 */
	private static function setupUserDplusCustid(User $user) {
		$custIDs = Db\Dealers::getDplusCustids([$user->locationid]);

		if (empty($custIDs)) {
			return false;
		}
		$user->custid = $custIDs[0];
		return true;
	}

	/**
	 * Setup User's CustIDs if they are limited to certain customers
	 * @param  User $user
	 * @return bool
	 */
	private static function setupUserCustids(User $user) {
		if ($user->role == DB\Roles::ROLE_DEALER) {
			return self::setupUserCustidsDealer($user);
		}

		if ($user->role == DB\Roles::ROLE_SALESREP) {
			return self::setupUserCustidsSalesrep($user);
		}
	}

	/**
	 * Setup User with Custid(s) for a dealer
	 * @param  User $user
	 * @return bool
	 */
	private static function setupUserCustidsDealer(User $user) {
		if ($user->role != DB\Roles::ROLE_DEALER) {
			return false;
		}

		$custIDs = Db\Dealers::getDplusCustids([$user->locationid]);
		$user->custids = $custIDs;

		if (DB\Roles::hasDealerRole($user->roleid)) {
			$clientIDs = Db\Dealers::getLocationClientids([$user->locationid]);
			$custIDs   = Db\Dealers::getDplusCustidsByClientid($clientIDs);
			$user->custids = $custIDs;
			return true;
		}
		return true;
	}

	/**
	 * Setup User with Custid(s) for a Sales Rep
	 * @param  User $user
	 * @return bool
	 */
	private static function setupUserCustidsSalesrep(User $user) {
		if ($user->role != DB\Roles::ROLE_SALESREP) {
			return false;
		}

		if (Db\Users::isSubrep($user->userid)) {
			return self::setupUserCustidsSalesrepSub($user);
		}

		$user->locationids = Db\Dealers::getLocationidsByRepid([$user->userid]);
		$user->custids     = Db\Dealers::getDplusCustidsByRepid([$user->userid]);
		return true;
	}

	/**
	 * Setup User with Custid(s) for a Sales Rep's Subrep
	 * @param  User $user
	 * @return bool
	 */
	private static function setupUserCustidsSalesrepSub(User $user) {
		if (Db\Users::isSubrep($user->userid) === false) {
			return false;
		}
		$user->locationids = Db\Users::getSubrepLocationids($user->userid);
		$user->custids     = Db\Dealers::getDplusCustids($user->locationids);
		return true;
	}

/* =============================================================
	Salesforce
============================================================= */
	/**
	 * Parse User Details from Salesforce tables
	 * @param User  $user
	 * @return void
	 */
	private static function setupUserFromSalesforce(User $user, array $session) {
		$user->salesforceuserid = $session['salesforce_user_id'];
		$sfUser = Db\UsersSalesforce::getUser($user->salesforceuserid);
		$user->userid     = $sfUser['users_salesforce_id'];
		$user->name       = $sfUser['name'];
		$user->email      = $sfUser['email'];
		$user->locationid = $sfUser['location_id'];
		$user->salesforceroles  = $sfUser['saml_roles'];
		self::setupUserDplusCustid($user);
		self::parseRolesFromSalesforce($user);
		self::parseAccessLevelsFromSalesforce($user);
		self::setupUserCustids($user);
		return true;
	}

	/**
	 * Parse Roles from Salesforce
	 * @param  User $user
	 * @return bool
	 */
	private static function parseRolesFromSalesforce(User $user) {
		$roles = explode(',', $user->salesforceroles);
		$rolesSDR    = [];
		$highestRoleid = 0;

		foreach ($roles as $sfRoleid) {
			if (array_key_exists($sfRoleid, Db\Roles::ROLES_SALESFORCE_TO_SDR) === false) {
				continue;
			}
			$sdrRoleid  = Db\Roles::ROLES_SALESFORCE_TO_SDR[$sfRoleid];
			$rolesSDR[] = $sdrRoleid;
			if ($sdrRoleid > $highestRoleid) {
				$highestRoleid = $sdrRoleid;
			}
		}
		$user->sdrroles  = $rolesSDR;
		$user->roleid    = $highestRoleid;
		$user->role      = Db\Roles::getSimpleRole($user->roleid);
		return true;
	}
	
	/**
	 * Parse Roles from Salesforce
	 * @param  User $user
	 * @return bool
	 */
	private static function parseAccessLevelsFromSalesforce(User $user) {
		$roles = explode(',', $user->salesforceroles);
		$levelsSDR = [];

		foreach ($roles as $sfRoleid) {
			if (array_key_exists($sfRoleid, Db\UserAccess::SALESFORCE_TO_SDR) === false) {
				continue;
			}
			$sdrLevels   = Db\UserAccess::SALESFORCE_TO_SDR[$sfRoleid];
			$levelsSDR = array_merge($levelsSDR, $sdrLevels);
		}
		$user->sdraccess = $levelsSDR;
		return true;
	}
	
}
