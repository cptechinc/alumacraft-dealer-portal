<?php namespace Aluma\Util;

/**
 * PhpInputGet
 * Wrapper for $_GET
 */
class PhpInputGet {
	/**
	 * Return if cookievariable exists
	 * @param  string $key
	 * @return bool
	 */
	public static function has($key) {
		return array_key_exists($key, $_GET);
	}

	/**
	 * Return cookieVariable
	 * @param  string $key
	 * @return mixed|false
	 */
	public static function get($key) {
		return self::has($key) ? $_GET[$key] : false;
	}

	/**
	 * Set cookieVariable
	 * @param  string $key
	 * @param  mixed $value
	 * @return void
	 */
	public static function set($key, $value) {
		$_GET[$key] = $value;
	}

	/**
	 * Remove cookieVariable
	 * @param  string $key
	 * @return bool
	 */
	public static function remove($key) {
		unset($_GET[$key]);
		return self::has($key) === false;
	}
}