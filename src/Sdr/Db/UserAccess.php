<?php namespace Aluma\Sdr\Db;
// ATK DSQL
use atk4\dsql\Query_MySQL as Query;
// Aluma SDR
use Aluma\Sdr\Database;

/**
 * UserAccess
 * Handles Querying User Access Data from SDR
 */
class UserAccess {
	const SALESFORCE_TO_SDR = [
		'DAEditDealerSalesMargin' => ["12"],
		'DAViewDealerCost' => ["13"],
		'DAViewSalesPrice' => ["14"],
		'DAOrderBoats'     => ["22"],
		'DAViewBoatOrders' => ["23", "36", "35"],
	];

	/**
	 * Return User Record
	 * @param  string $userID
	 * @return array
	 */
	public static function getLevels($userID) {
		/** @var Query */
		$q = Database::query();
		$q->field('*');
		$q->table('users_SDR_access');
		$q->where('user_id', $userID);
		$results = $q->get();
		return array_column($results, 'access_id');
	}

	/**
	 * Return if User Record Exists
	 * @param  string $userID
	 * @return array
	 */
	public static function exist($userID) {
		/** @var Query */
		$q = Database::query();
		$q->field('COUNT(*)');
		$q->table('users_SDR_access');
		$q->where('user_id', $userID);
		return boolval($q->getOne());
	}
}
