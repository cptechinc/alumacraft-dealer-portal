<?php namespace Aluma\Util;

/**
 * PhpSession
 * Wrapper for $_SESSION
 * 
 */
class PhpSession {
	/**
	 * Return if session variable exists
	 * @param  string $key
	 * @return bool
	 */
	public static function has($key) {
		return array_key_exists($key, $_SESSION);
	}

	/**
	 * Return session Variable
	 * @param  string $key
	 * @return mixed|false
	 */
	public static function get($key) {
		return self::has($key) ? $_SESSION[$key] : false;
	}

	/**
	 * Set session Variable
	 * @param  string $key
	 * @param  mixed $value
	 * @return void
	 */
	public static function set($key, $value) {
		$_SESSION[$key] = $value;
	}

	/**
	 * Remove Session Variable
	 * @param  string $key
	 * @return bool
	 */
	public static function remove($key) {
		unset($_SESSION[$key]);
		return self::has($key) === false;
	}
}