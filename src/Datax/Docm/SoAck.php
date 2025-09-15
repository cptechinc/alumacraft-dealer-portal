<?php namespace Aluma\Datax\Docm;
// Atk DSQL
use atk4\dsql\Query_MySQL as Query;
// Aluma Datax
use Aluma\Datax\Database;

/**
 * Provides Querying to Warranty Master
 */
class SoAck {
	const DB_TABLE = 'doc_index';
    const FOLDER = 'SOACK';

	private static $instance;

	/**
	 * Return Instance
	 * @return self
	 */
	public static function instance() {
		if (empty(self::$instance)) {
			self::$instance = new static();
		}
		return self::$instance;
	}

	/**
	 * Return Query
	 * @return Query
	 */
	public function query() {
		$q = Database::query();
		$q->table(static::DB_TABLE);
        $q->where('DoccFolder', static::FOLDER);
		return $q;
	}

	/**
	 * Return Query Filtered By Order Number
	 * @param  string $ordernbr
	 * @return Query
	 */
	public function queryOrdernbr($ordernbr) {
		$q = $this->query();
		$q->where('DociFld1', $ordernbr);
		return $q;
	}

	/**
	 * Return SO ACK documents
	 * @param  string $ordernbr
	 * @return array
	 */
	public function getDocuments($ordernbr) {
		$q = $this->queryOrdernbr($ordernbr);
        echo $q->getDebugQuery();
		return $q->get();
	}
}
