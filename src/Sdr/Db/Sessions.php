<?php namespace Aluma\Sdr\Db;
// ATK DSQL
use atk4\dsql\Query_MySQL as Query;
// Aluma SDR
use Aluma\Sdr\Database;

/**
 * Sessions
 * Handles Session Data from SDR
 */
class Sessions {
	/**
	 * Return if User + Session Exists
	 * @param  string $sessionID
	 * @param  string $userID
	 * @return bool
	 */
	public static function exists($sessionID, $userID) {
		/** @var Query */
		$q = Database::query();
		$q->table('view_sessions');
		$q->field('COUNT(*)');
		$q->where('session', $sessionID);
		$q->where('user_id', $userID);
		return boolval($q->getOne());
	}

	/**
	 * Return Session Record
	 * @param  string $sessionID
	 * @return array
	 */
	public static function getSession($sessionID) {
		/** @var Query */
		$q = Database::query();
		$q->field('*');
		$q->table('view_sessions');
		$q->where('session', $sessionID);
		return $q->getRow();
	}
}
