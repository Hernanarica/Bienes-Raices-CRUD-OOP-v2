<?php

namespace App\Model;

use App\DB\DBConnection;
use App\Propiedad\Propiedad;
use Exception;
use PDO;

class Model
{
//--Modelo--
//traer
//traer por pk
//eliminar,
//update
	protected string $table;
	protected string $pk;

	/**
	 * Retorna todos los registros de una tabla
	 * en forma de array siendo cada uno de sus
	 * elementos una instancia de la clase donde
	 * se ejecute.
	 *
	 * @return Propiedad[]
	 */
	public function getAll(): array
	{
		$db = DBConnection::getConnection();

		$query = "SELECT * FROM $this->table";

		$stmt = $db->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_CLASS, static::class);
	}

	public function getByPK(int $pk)
	{
		$db = DBConnection::getConnection();

		$query = "SELECT * FROM $this->table WHERE $this->pk = ?";

		$stmt = $db->prepare($query);
		$stmt->execute([$pk]);
		return $salida[] = $stmt->fetchObject(static::class);
//		while ($row = $stmt->fetchObject(static::class)) {
//			$salida[] = $row;
//		}
//
//		return $salida;
	}
}