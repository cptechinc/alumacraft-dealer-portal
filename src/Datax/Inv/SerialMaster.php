<?php namespace Aluma\Datax\Inv;
// Atk DSQL
use atk4\dsql\Query_MySQL as Query;
// Aluma Datax
use Aluma\Datax\Database;

/**
 * Provides Querying to Warranty Master
 */
class SerialMaster {
	const DB_TABLE = 'inv_ser_mast';

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
	 * @return Query
	 */
	public function querySerialnbr($serialnbr) {
		$q = $this->query();
		$q->where('SermSerNbr', $serialnbr);
		return $q;
	}

	/**
	 * Return Item ID
	 * @param  string $serialnbr Serial Number
	 * @return string
	 */
	public function getItemid($serialnbr) {
		$q = $this->querySerialnbr($serialnbr);
		$q->field('InitItemNbr');
		return $q->getOne();
	}
}
