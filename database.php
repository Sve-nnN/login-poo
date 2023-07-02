<?php
class Database
{
	private $con;
	private $dbhost = "localhost";
	private $dbuser = "root";
	private $dbpass = "";
	private $dbname = "base";
	function __construct()
	{
		$this->connect_db();
	}
	public function connect_db()
	{
		$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
		if (mysqli_connect_error()) {
			die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
		}
	}
	public function sanitize($var)
	{
		$return = mysqli_real_escape_string($this->con, $var);
		return $return;
	}
	public function create($nombre, $apellido, $usuario, $PNF, $cedula, $password)
	{
		$sql = "INSERT INTO `alumnos` (nombre, apellido, usuario, PNF, cedula, password) VALUES ('$nombre', '$apellido', '$usuario', '$PNF', '$cedula', '$password')";
		$res = mysqli_query($this->con, $sql);
		if ($res) {
			return true;
		} else {
			return false;
		}
	}

	public function validarLogin($usuario, $password)
	{
		$consulta = "SELECT password FROM alumnos WHERE usuario = '$usuario'";

		$result = mysqli_query($this->con, $consulta);

		if ($result->num_rows > 0) {
			$fila = $result->fetch_assoc();
			if (strcmp($password, $fila["password"]) == 0)
				return true;
			else
				return false;
		} else
			return false;
	}
	public function login()
	{
		$usuario = $_POST["usuario"];
		$password = $_POST["password"];
		if (validarLogin($usuario, $password) == true) {
			$_SESSION[$usuario] = $usuario;
			header("location:index.php");
		}
	}
	public function read()
	{
		$sql = "SELECT * FROM alumnos";
		$res = mysqli_query($this->con, $sql);
		return $res;
	}
	public function single_record($id)
	{
		$sql = "SELECT * FROM alumnos where id='$id'";
		$res = mysqli_query($this->con, $sql);
		$return = mysqli_fetch_object($res);
		return $return;
	}
	public function update($nombre, $apellido, $cedula, $usuario, $PNF, $id)
	{
		$sql = "UPDATE alumnos SET nombre='$nombre', apellido='$apellido', cedula='$cedula', usuario='$usuario', PNF='$PNF' WHERE id=$id";
		$res = mysqli_query($this->con, $sql);
		if ($res) {
			return true;
		} else {
			return false;
		}
	}
	public function delete($id)
	{
		$sql = "DELETE FROM alumnos WHERE id=$id";
		$res = mysqli_query($this->con, $sql);
		if ($res) {
			return true;
		} else {
			return false;
		}
	}
}