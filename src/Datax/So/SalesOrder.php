<?php namespace Aluma\Datax\So;
// Atk DSQL
use atk4\dsql\Query_MySQL as Query;
// Aluma Datax
use Aluma\Datax\Database;

/**
 * Provides Querying to Warranty Master
 */
class SalesOrder {
	const DB_TABLE = 'so_header';

	private static $master;

	/**
	 * Return Instance
	 * @return self
	 */
	public static function instance() {
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
	 * Return Query Filtered By Order Number
	 * @param  string $ordernbr
	 * @return Query
	 */
	public function queryOrdernbr($ordernbr) {
		$q = $this->query();
		$q->where('OehdNbr', $ordernbr);
		return $q;
	}

	/**
	 * Return Order Customer ID
	 * @param  string $ordernbr
	 * @return string
	 */
	public function getCustid($ordernbr) {
		$q = $this->queryOrdernbr($ordernbr);
		$q->field('ArcuCustId');
		return $q->getOne();
	}
}
