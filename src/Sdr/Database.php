<?php namespace Aluma\Sdr;
// PHP Core
use PDO;
// Atk DSQL
use atk4\dsql\Query_MySQL as Query;

class Database {
	private static $pdo;

	/**
	 * Set PDO Connection
	 * @param PDO $pdo
	 */
	public static function setPdo(PDO $pdo) {
		self::$pdo = $pdo;
	}

	/**
	 * Return Query Connection
	 * @return Query
	 */
	public static function query() {
		return new Query(['connection' => self::$pdo]);
	}
}
