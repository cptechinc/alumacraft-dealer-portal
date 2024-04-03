<?php namespace Aluma\Sdr\Db;
// ATK DSQL
use atk4\dsql\Query_MySQL as Query;
// Aluma SDR
use Aluma\Sdr\Database;

/**
 * Dealers
 * Provides Dealers / Location Data from SDR Database
 */
class Dealers {
	/**
	 * Return Dplus CustIDs
	 * @param  string $locationID
	 * @return array
	 */
	public static function getLocationClientids($locationID = []) {
		/** @var Query */
		$q = Database::query();
		$q->table('view_locations');
		$q->field('client_id');
		$q->where('location_id', 'in', $locationID);
		$results = $q->get();
		return array_column($results, 'client_id');
	}

	/**
	 * Return Dplus CustIDs
	 * @param  string $locationID
	 * @return array
	 */
	public static function getDplusCustids($locationID = []) {
		/** @var Query */
		$q = Database::query();
		$q->table('dealer_brands');
		$q->field('mfg_dealer_number');
		$q->where('location_id', 'in', $locationID);
		$results = $q->get();
		return array_column($results, 'mfg_dealer_number');
	}

	/**
	 * Return Dplus CustIDs For Sales Rep IDs(s)
	 * @param  string $repID
	 * @return array
	 */
	public static function getDplusCustidsByRepid($repID = []) {
		/** @var Query */
		$q = Database::query();
		$q->table('dealer_brands');
		$q->field('mfg_dealer_number');
		$q->where($q->orExpr()->where('rep_id', 'in', $repID)->where('rep_id1', 'in', $repID));
		$results = $q->get();
		return array_column($results, 'mfg_dealer_number');
	}

	/**
	 * Return Dplus CustIDs For Sales Client IDs(s)
	 * @param  string $clientID
	 * @return array
	 */
	public static function getDplusCustidsByClientid($clientID = []) {
		/** @var Query */
		$q = Database::query();
		$q->table('view_locations');
		$q->join('dealer_brands.location_id', 'view_locations.location_id');
		$q->field('mfg_dealer_number');
		$q->where('client_id', 'in', $clientID);
		$results = $q->get();
		return array_column($results, 'mfg_dealer_number');
	}

	/**
	 * Return Dealer Location IDs by Rep ID
	 * @param  string $repID Sales Rep ID
	 * @return array
	 */
	public static function getLocationidsByRepid($repID) {
		/** @var Query */
		$q = Database::query();
		$q->table('dealer_brands');
		$q->field('location_id');
		$q->where('rep_id', 'in', $repID);
		$q->where('status', '>', 0);
		$results = $q->get();
		return array_column($results, 'location_id');
	}

	/**
	 * Return Dealer Locations
	 * @param  string $locationID
	 * @return array
	 */
	public static function getDealerLocationsByid($locationID = []) {
		/** @var Query */
		$q = Database::query();
		$q->table('dealer_brands');
		$q->join('view_locations.location_id', 'dealer_brands.location_id');
		$q->field(['dealer_brands.location_id', 'view_locations.name', 'view_locations.city']);
		if (empty($locationID) === false) {
			$q->where('dealer_brands.location_id', 'in', $locationID);
		}
		$q->where('view_locations.name', '!=', '');
		$q->order('view_locations.name');

		$results = $q->get();
		return $results;
	}

	/**
	 * Return Dealer Locations
	 * @param  string $locationID
	 * @return array
	 */
	public static function getDealerLocationsByDplusCustid($custID = [], $debug = false) {
		$fields = [
			'dealer_brands.location_id' => 'location_id',
			'view_locations.name' => 'name',
			'view_locations.city' => 'city',
			'dealer_brands.status' => 'status',
			'dealer_brands.mfg_dealer_number' => 'dpluscust',
			'dealer_brands.mfg_dealer_number' => 'dpluscustid'
		];
		/** @var Query */
		$q = Database::query();
		$q->table('dealer_brands');
		$q->join('view_locations.location_id', 'dealer_brands.location_id');
		foreach ($fields as $field => $alias) {
			$q->field($field, $alias);
		}
		if (empty($custID) === false) {
			$q->where('dealer_brands.mfg_dealer_number', 'in', $custID);
		}
		$q->where('view_locations.name', '!=', '');
		$q->order('view_locations.name');
		if ($debug) {
			return $q->getDebugQuery();
		}
		$results = $q->get();
		return $results;
	}

	/**
	 * Return Dealer Location Name
	 * @param  string $locationID
	 * @return array
	 */
	public static function getLocationName($locationID) {
		/** @var Query */
		$q = Database::query();
		$q->table('view_locations');
		$q->field('view_locations.name');
		$q->where('view_locations.location_id', $locationID);
		$results = $q->getOne();
		return $results;
	}
}
