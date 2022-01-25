<?php namespace Aluma\Datax\Inv\OptCodes;
// Atk DSQL
use atk4\dsql\Query_MySQL as Query;
// Aluma Datax
use Aluma\Datax\Database;

/**
 * Provides Querying to InvOptCode for an Optional Code
 */
abstract class OptCode {
	const DB_TABLE = 'inv_opt_code';
	const OPTCODE = '';

	/**
	 * Return Query filtered By InoptCode
	 * @return Query
	 */
	public function query() {
		$q = Database::query();
		$q->table(static::DB_TABLE);
		$q->where('InoptCode', static::OPTCODE);
		return $q;
	}

	/**
	 * Return Query Filtered By InoptCode, and Item ID(s)
	 * @param  string|array $itemID Item ID
	 * @return Query
	 */
	public function queryCodesByItemid($itemID) {
		$q = $this->query();
		$q->where('InitItemNbr', $itemID);
		return $q;
	}

	/**
	 * Return if Item has Code Value
	 * @param  string $itemID Item ID
	 * @return bool
	 */
	public function hasCode($itemID) {
		$q = $this->queryCodesByItemid($itemID);
		$q->field('COUNT(*)');
		return boolval($q->getOne());
	}

	/**
	 * Return Code for Item ID
	 * @param  string $itemID Item ID
	 * @return string
	 */
	public function getCodeByItemid($itemID) {
		$q = $this->queryCodesByItemid($itemID);
		$q->field('InoptValue');
		return $q->getOne();
	}

	/**
	 * Return Code for Item ID
	 * @param  string $itemID Item ID
	 * @return string
	 */
	public function getCodeDescByItemid($itemID) {
		$q = $this->queryCodesByItemid($itemID);
		$q->field('InoptCodeDesc');
		return $q->getOne();
	}
}
