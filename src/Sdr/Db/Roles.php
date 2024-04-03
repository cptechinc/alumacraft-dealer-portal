<?php namespace Aluma\Sdr\Db;
// ATK DSQL
use atk4\dsql\Query_MySQL as Query;
// Aluma SDR
use Aluma\Sdr\Database;

/**
 * Roles
 * Handles Assigning, Getting Roles from SDR
 */
class Roles {
	const ROLE_ADMIN     = 'SADMIN';
	const ROLE_DEALER    = 'DEALER';
	const ROLE_SALESREP  = 'SREP';

	const ROLES =  [
		"15" => "SREP",
		"18" => "SREP",
		"20" => "SADMIN",
		"37" => "SADMIN",
		"27" => "DEALER",
		"28" => "DEALER",
		"30" => "DEALER",
		"31" => "DEALER",
		"36" => "DEALER",
		"38" => "DEALER",
		"29" => "DEALER",
	];

	const ROLES_DEALER = [
		"28" => "ADMIN",
		"15" => "SALESMANAGER",
		"27" => "OWNER",
		"29" => "SALESMANAGER",
		"36" => "Clerical"
	];

	const ROLES_SALESFORCE_TO_SDR = [
		'DFPrincipal' => "27",
		'DFSlsMgr'    => "29",
		'DFLocSlsMgr' => "30",
		'DFSalesman'  => "31",
		'DFClerical'  => "36",
		'DExtCompany' => "38",
	];

	/**
	 * Return if Role ID is a dealer Role
	 * @param  string $roleID
	 * @return bool
	 */
	public static function hasDealerRole($roleID) {
		return array_key_exists($roleID, self::ROLES_DEALER);
	}

	/**
	 * Return Simple Role for App
	 * @param  string $roleID
	 * @return string
	 */
	public static function getSimpleRole($roleID) {
		return self::ROLES[$roleID];
	}

	/**
	 * Return Highest Role for User ID
	 * @param  string $userID
	 * @return string
	 */
	public static function getHighestRole($userID) {
		/** @var Query */
		$q = Database::query();
		$q->table('users_SDR_roles');
		$q->field('MAX(role_id)');
		$q->where('user_id', $userID);
		return $q->getOne();
	}

	/**
	 * Return Simple Role for User ID
	 * @param  string $userID
	 * @return string
	 */
	public static function getSimpleRoleByUserid($userID) {
		$roleID = self::getHighestRole($userID);
		return self::getSimpleRole($roleID);
	}
}
