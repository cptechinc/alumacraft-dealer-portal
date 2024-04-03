<?php namespace Aluma\Sdr;
// Aluma
use Aluma\Util\Data;
use Aluma\Sdr\Db;

/**
 * User
 * Contains Alumacraft SDR User Data
 * @property string $sessionid   Session ID
 * @property string $userid      SDR User ID
 * @property string $name        User's Name
 * @property string $email       User's Email
 * @property string $locationid  Location ID
 * @property string $custid      User's Customer ID (Dplus)
 * @property string $role        User's Role (Simple)
 * @property array  $custids     Cust IDs this user is limited to (Dplus Cust IDs)
 * @property array  $locationids Location IDs this user is limited to
 * @property string $salesforceuserid  SalesForce User ID
 * @property string $salesforceroles   Salesforce User Roles
 * @property array  $sdrroles          SDR User Roles
 * @property array  $sdraccess         SDR User Access Levels
 */
class User extends Data {
	public function __construct() {
		$this->sessionid   = '';
		$this->userid      = '';
		$this->name        = '';
		$this->email       = '';
		$this->locationid  = '';
		$this->custid      = '';
		$this->role        = '';
		$this->custids     = [];
		$this->locationids = [];
		$this->salesforceuserid = '';
		$this->salesforceroles = [];
		$this->sdrroles  = [];
		$this->sdraccess = [];
	}

	/**
	 * Return Dealers this User is tied to
	 * @return array
	 */
	public function getDealers() {
		return Db\Dealers::getDealerLocationsByid($this->locationids);
	}

	/**
	 * Return if User has a Role
	 * @return bool
	 */
	public function hasRole() {
		return empty($this->role) === false;
	}

	/**
	 * Return if User has Admin Role
	 * @return bool
	 */
	public function isAdmin() {
		return $this->role === Db\Roles::ROLE_ADMIN;
	}

	/**
	 * Return if User has Admin Role
	 * @return bool
	 */
	public function isDealer() {
		return $this->role === Db\Roles::ROLE_DEALER;
	}

	/**
	 * Return if User has Admin Role
	 * @return bool
	 */
	public function isSalesrep() {
		return $this->role === Db\Roles::ROLE_SALESREP;
	}

	/**
	 * Return if User is a subrep
	 * @return bool
	 */
	public function isSubRep() {
		return Db\Users::isSubrep($this->userid);
	}

	/**
	 * REturn if User has Access Level
	 * @param  string $id
	 * @return bool
	 */
	public function hasAccessLevel($id) {
		return in_array($id, $this->sdraccess);
	}
}
