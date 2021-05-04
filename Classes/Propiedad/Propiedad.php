<?php


namespace App\Propiedad;


use App\DB\DBConnection;
use App\Model\Model;
use PDO;

class Propiedad extends Model
{
	protected string $table = 'propiedades';
	protected string $pk    = 'id_propiedades';

	protected int    $id_propiedades;
	protected string $titulo;
	protected float  $precio;
	protected string $imagen;
	protected string $descripcion;
	protected int    $habitaciones;
	protected int    $wc;
	protected int    $estacionamiento;
	protected string $fecha_creacion;
	protected int    $fk_id_vendedores;

	protected array $propiedadesPermitidas = [
		'id_propiedades',
		'titulo',
		'precio',
		'imagen',
		'descripcion',
		'habitaciones',
		'wc',
		'estacionamiento',
		'fecha_creacion',
		'fk_id_vendedores',
	];


	/**
	 * @param int $amounts
	 * @return Propiedad[]
	 */
	public static function getSome(int $amounts): array
	{
		$db = DBConnection::getConnection();

		$query = "SELECT * FROM propiedades LIMIT ?";

		$stmt = $db->prepare($query);
		$stmt->bindParam(1, $amounts, PDO::PARAM_INT); //Vinculamos el parámetro de esta manera diciéndole a PDO que es un int
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
	}

	/**
	 * @return int
	 */
	public function getIdPropiedades(): int
	{
		return $this->id_propiedades;
	}

	/**
	 * @param int $id_propiedades
	 */
	public function setIdPropiedades(int $id_propiedades): void
	{
		$this->id_propiedades = $id_propiedades;
	}

	/**
	 * @return string
	 */
	public function getTitulo(): string
	{
		return $this->titulo;
	}

	/**
	 * @param string $titulo
	 */
	public function setTitulo(string $titulo): void
	{
		$this->titulo = $titulo;
	}

	/**
	 * @return float
	 */
	public function getPrecio(): float
	{
		return $this->precio;
	}

	/**
	 * @param float $precio
	 */
	public function setPrecio(float $precio): void
	{
		$this->precio = $precio;
	}

	/**
	 * @return string
	 */
	public function getImagen(): string
	{
		return $this->imagen;
	}

	/**
	 * @param string $imagen
	 */
	public function setImagen(string $imagen): void
	{
		$this->imagen = $imagen;
	}

	/**
	 * @return string
	 */
	public function getDescripcion(): string
	{
		return $this->descripcion;
	}

	/**
	 * @param string $descripcion
	 */
	public function setDescripcion(string $descripcion): void
	{
		$this->descripcion = $descripcion;
	}

	/**
	 * @return int
	 */
	public function getHabitaciones(): int
	{
		return $this->habitaciones;
	}

	/**
	 * @param int $habitaciones
	 */
	public function setHabitaciones(int $habitaciones): void
	{
		$this->habitaciones = $habitaciones;
	}

	/**
	 * @return int
	 */
	public function getWc(): int
	{
		return $this->wc;
	}

	/**
	 * @param int $wc
	 */
	public function setWc(int $wc): void
	{
		$this->wc = $wc;
	}

	/**
	 * @return int
	 */
	public function getEstacionamiento(): int
	{
		return $this->estacionamiento;
	}

	/**
	 * @param int $estacionamiento
	 */
	public function setEstacionamiento(int $estacionamiento): void
	{
		$this->estacionamiento = $estacionamiento;
	}

	/**
	 * @return string
	 */
	public function getFechaCreacion(): string
	{
		return $this->fecha_creacion;
	}

	/**
	 * @param string $fecha_creacion
	 */
	public function setFechaCreacion(string $fecha_creacion): void
	{
		$this->fecha_creacion = $fecha_creacion;
	}

	/**
	 * @return int
	 */
	public function getFkIdVendedores(): int
	{
		return $this->fk_id_vendedores;
	}

	/**
	 * @param int $fk_id_vendedores
	 */
	public function setFkIdVendedores(int $fk_id_vendedores): void
	{
		$this->fk_id_vendedores = $fk_id_vendedores;
	}
}