<?php

namespace App\Usuario;

use App\Model\Model;
use App\DB\DBConnection;
use PDO;

class Usuario extends Model
{
	protected string $table = "Usuarios";
	protected string $pk    = "id_usuario";

	protected string $id;
	protected string $email;
	protected string $password;

	public function getByEmail($email)
	{
		$db = DBConnection::getConnection();

		$query = "SELECT * FROM usuarios WHERE email = ?";
		$stmt  = $db->prepare($query);
		$stmt->execute([$email]);
		return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);

	}
}