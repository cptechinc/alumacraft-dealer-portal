<?php namespace Aluma\Sdr\Db;
// ATK DSQL
use atk4\dsql\Query_MySQL as Query;
// Aluma SDR
use Aluma\Sdr\Database;

/**
 * UsersSalesforce
 * Handles Querying User Data from users_salesforce table
 */
class UsersSalesforce {
	/**
	 * Return User Record
	 * @param  string $userID SalesForce User ID
	 * @return array
	 */
	public static function getUser($userID) {
		/** @var Query */
		$q = Database::query();
		$q->field('*');
		$q->table('users_salesforce');
		$q->where('salesforce_user_id', $userID);
		return $q->getRow();
	}

	/**
	 * Return if User Record Exists
	 * @param  string $userID
	 * @return array
	 */
	public static function exists($userID) {
		/** @var Query */
		$q = Database::query();
		$q->field('COUNT(*)');
		$q->table('users_salesforce');
		$q->where('salesforce_user_id', $userID);
		return boolval($q->getOne());
	}
}
