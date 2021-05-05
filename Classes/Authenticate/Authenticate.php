<?php


namespace App\Authenticate;


use App\Usuario\Usuario;

class Authenticate
{
	public function isAuthenticate($email, $password)
	{
		$usuario = (new Usuario())->getByEmail($email);

		if ($usuario) {
			if (password_verify($password, $usuario->getPassword())) {
				return true;
			}
		}

		return false;
	}
}