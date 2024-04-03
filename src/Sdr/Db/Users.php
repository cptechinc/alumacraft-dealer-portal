<?php namespace Aluma\Sdr\Db;
// ATK DSQL
use atk4\dsql\Query_MySQL as Query;
// Aluma SDR
use Aluma\Sdr\Database;

/**
 * Users
 * Handles Querying User Data from SDR
 */
class Users {
	const SUBREPS_USERIDS = [
		'2937', // Chuck
		'2953', // POTVIN
		'4538', // Howie
		'2953', // Ketel
	];

	const SUBREP_LOCATIONS = [
		'2937' => [
			'1049','1068','1074','1075','1320','1474','1475','1489','1073','1504','1554','1761','1883','1873','1887'
		],
		'2953' => [],
		'4538' => [
			'694', '1046', '1049', '1050', '1052', '1054', '1055', '1056', '1057', '1060', '1062', '1065', '1067', '1068', '1070', '1073', '1074', '1075', '1076', '1079', '1087', '1278', '1305', '1308', '1315', '1320', '1424', '1426', '1465', '1474', '1482', '1488', '1489', '1504', '1554', '1758', '1761', '1776', '1831', '1873', '1883', '1887', '1898', '2029', '2069', '2326', '2451', '2453', '2542', '2557',
			'2717', '2679'
		],
		'2953' => [
			'1278','1050','1052','1056','1058','1060','1062','1064','1273','1067','1304','1070','694','1073','1078','1080','609','1087','1079'
		],
	];

	/**
	 * Return User Record
	 * @param  string $userID
	 * @return array
	 */
	public static function getUser($userID) {
		/** @var Query */
		$q = Database::query();
		$q->field('*');
		$q->table('view_users');
		$q->where('user_id', $userID);
		return $q->getRow();
	}

	/**
	 * Return if User Record Exists
	 * @param  string $userID
	 * @return array
	 */
	public static function exists($userID) {
		/** @var Query */
		$q = Database::query();
		$q->field('COUNT(*)');
		$q->table('view_users');
		$q->where('user_id', $userID);
		return boolval($q->getOne());
	}

	/**
	 * Return if User is a Subrep
	 * @param  string $userID
	 * @return bool
	 */
	public static function isSubrep($userID) {
		return in_array($userID, self::SUBREPS_USERIDS);
	}

	/**
	 * Return Location IDs for Subrep
	 * @param  string $userID
	 * @return array
	 */
	public static function getSubrepLocationids($userID) {
		if (array_key_exists($userID, self::SUBREP_LOCATIONS) === false) {
			return [];
		}
		return self::SUBREP_LOCATIONS[$userID];
	}
}
