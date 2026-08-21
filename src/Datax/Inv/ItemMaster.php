<?php namespace Aluma\Datax\Inv;
// Atk DSQL
use atk4\dsql\Query_MySQL as Query;
// Aluma Datax
use Aluma\Datax\Database;

/**
 * Provides Querying to Item Master
 */
class ItemMaster {
	const DB_TABLE = 'inv_item_mast';

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
	 * Return Query Filtered By Item ID
	 * @param  string $itemid Item ID
	 * @return Query
	 */
	public function queryItemid($itemid) {
		$q = $this->query();
		$q->where('InitItemNbr', $itemid);
		return $q;
	}

	/**
	 * Return Item Group Code
	 * @param  string $itemid Item ID
	 * @return string
	 */
	public function getItemgroup($itemid) {
		$q = $this->queryItemid($itemid);
		$q->field('IntbGrup');
		return (string)$q->getOne();
	}
}
