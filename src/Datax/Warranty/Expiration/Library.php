<?php namespace Aluma\Datax\Warranty\Expiration;
// Aluma Inv
use Aluma\Datax\Inv\OptCodes\Warrexpr;
use Aluma\Datax\Inv\SerialMaster;
use Aluma\Datax\Inv\WarrantyMaster;

class Library {
	const TIME_UNIT = 'years';

	/**
	 * Return if Item has Expiration Period Defined
	 * @param  string $itemID
	 * @return bool
	 */
	public static function hasExpirationPeriod($itemID) {
		$lib = Warrexpr::getInstance();
		return $lib->hasCode($itemID);
	}

	/**
	 * Return Expiration Period
	 * @param  string $itemID
	 * @return int
	 */
	public static function getExpirationPeriod($itemID) {
		$lib = Warrexpr::getInstance();
		return $lib->getCodeByItemid($itemID);
	}

	/**
	 * Return Original Register Date for Serialized Item
	 * @param  string $serialnbr Serial Number
	 * @param  string $itemID    Item ID
	 * @return string
	 */
	public static function getOriginalWarrantyDate($serialnbr, $itemID) {
		return WarrantyMaster::getInstance()->getOriginalWarrantyDate($serialnbr, $itemID);
	}

	/**
	 * Return Last Register Date for Serialized Item
	 * @param  string $serialnbr Serial Number
	 * @param  string $itemID    Item ID
	 * @return string
	 */
	public static function getLastWarrantyDate($serialnbr, $itemID) {
		return WarrantyMaster::getInstance()->getLastWarrantyDate($serialnbr, $itemID);
	}

	/**
	 * Return Warranty Expriation Date based on original Registration Date
	 * @param  string $serialnbr  Serial Number
	 * @param  string $itemID     Item ID
	 * @param  string $dateFormat Date Format
	 * @return string
	 */
	public static function getWarrantyExpireDate($serialnbr, $itemID, $dateFormat = 'm/d/Y') {
		if (self::hasExpirationPeriod($itemID) === false) {
			return '';
		}
		$regDate      = self::getOriginalWarrantyDate($serialnbr, $itemID);
		$expirePeriod = self::getExpirationPeriod($itemID);
		if (empty($regDate) || empty($expirePeriod)) {
			return '';
		}
		return date($dateFormat, strtotime($regDate . " + $expirePeriod " . self::TIME_UNIT));
	}
}
