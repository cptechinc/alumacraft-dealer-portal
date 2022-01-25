<?php namespace Aluma\Datax\Inv\OptCodes;
// Atk DSQL
use atk4\dsql\Query_MySQL as Query;
// Aluma Datax
use Aluma\Datax\Database;

/**
 * Provides Querying to InvOptCode for an Optional Code
 * Handles Warranty Expiration OptCode querying
 */
class Warrexpr extends OptCode{
	const OPTCODE = 'WARREXPR';

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
}
