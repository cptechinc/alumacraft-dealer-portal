<?php namespace Aluma\Util;

/**
 * PhpCookie
 * Wrapper for $_COOKIE
 */
class PhpCookie {
	/**
	 * Return if cookievariable exists
	 * @param  string $key
	 * @return bool
	 */
	public static function has($key) {
		return array_key_exists($key, $_COOKIE);
	}

	/**
	 * Return cookieVariable
	 * @param  string $key
	 * @return mixed|false
	 */
	public static function get($key) {
		return self::has($key) ? $_COOKIE[$key] : false;
	}

	/**
	 * Set cookieVariable
	 * @param  string $key
	 * @param  mixed $value
	 * @return void
	 */
	public static function set($key, $value) {
		$_COOKIE[$key] = $value;
	}

	/**
	 * Remove cookieVariable
	 * @param  string $key
	 * @return bool
	 */
	public static function remove($key) {
		unset($_COOKIE[$key]);
		return self::has($key) === false;
	}
}