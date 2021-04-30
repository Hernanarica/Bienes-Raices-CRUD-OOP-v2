<?php

namespace App\Session;
/**
 * Clase Session
 *
 * Se encarga del manejo de las variables de session.
 *
 */
class Session
{
	/**
	 * Guarda un valor en la variable global
	 * $_Session[''].
	 *
	 * @param string $key
	 * @param string|array|int $value
	 */
	public static function set(string $key, string|array|int $value)
	{
		$_SESSION[ $key ] = $value;
	}

	/**
	 * @param string $key
	 * @return mixed
	 */
	public static function get(string $key): mixed
	{
		return $_SESSION[ $key ];
	}

	/**
	 * Elimina el valor asociado a la key
	 * de mi variable global.
	 *
	 * @param $key
	 */
	public static function delete($key)
	{
		unset($_SESSION[ $key ]);
	}

	/**
	 * Evalúa si la key existe en mi variable global.
	 *
	 * @param $key
	 * @return bool
	 */
	public static function has($key): bool
	{
		return isset($_SESSION[ $key ]);
	}

	/**
	 * @param $key
	 * @return mixed
	 */
	public static function flash($key): mixed
	{
		if (!self::has($key)) return null;

		$value = self::get($key);
		self::delete($key);
		return $value;
	}
}