<?php namespace Aluma\Datax\Inv;
// Atk DSQL
use atk4\dsql\Query_MySQL as Query;
// Aluma Datax
use Aluma\Datax\Database;

/**
 * Provides Querying to Warranty Master
 */
class WarrantyMaster {
	const DB_TABLE = 'inv_war_mast';

	private static $master;

	/**
	 * Return Instance
	 * @return self
	 */
	public static function getInstance() {
		if (empty(self::$master)) {
			self::$master = new static();
		}
		return self::$master;
	}

	/**
	 * Return Query
	 * @return Query
	 */
	public function query() {
		$q = Database::query();
		$q->table(static::DB_TABLE);
		return $q;
	}

	/**
	 * Return Query Filtered By Serial Number, Item ID
	 * @param  string $serialnbr Serial Number
	 * @param  string $itemID    Item ID(s)
	 * @return Query
	 */
	public function querySerialnbrItemid($serialnbr, $itemID) {
		$q = $this->query();
		$q->where('SermSerNbr', $serialnbr);
		$q->where('InitItemNbr', $itemID);
		return $q;
	}

	/**
	 * Return Original Warranty Date
	 * @param  string $serialnbr Serial Number
	 * @param  string $itemID    Item ID
	 * @return string
	 */
	public function getOriginalWarrantyDate($serialnbr, $itemID) {
		$q = $this->querySerialnbrItemid($serialnbr, $itemID);
		$q->field('WarmAcOrigWarrDate');
		$date = '';
		try {
			$date = $q->getOne();
		} catch (\Exception $e) {
			return '';
		}
		return $date;
	}

	/**
	 * Return Last Warranty Date
	 * @param  string $serialnbr Serial Number
	 * @param  string $itemID    Item ID
	 * @return string
	 */
	public function getLastWarrantyDate($serialnbr, $itemID, $debug = false) {
		$q = $this->querySerialnbrItemid($serialnbr, $itemID);
		$q->field('WarmEntryDate');
		if ($debug) {
			return $q->getDebugQuery();
		}
		$date = '';
		try {
			$date = $q->getOne();
		} catch (\Exception $e) {
			return '';
		}
		return $date;
	}
}
