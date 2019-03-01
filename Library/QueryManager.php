<?php 
/**
 * Manejador de consultas
 */
class QueryManager extends Controllers
{
	private $link;
	function __construct($host,$user,$pass,$db)
	{
		// La propiedad $link se convierte en un obketo al instanciarse mysqli, al mismo tiempo que recibe los parametros de conexion
		$this->link = new mysqli($host,$user,$pass,$db);
		if (!$this->link) {
			echo ("Error de coneccion");
			exit();
		}
	}
	// Este metodo recibe los atributos a consultar (campos de la db), la tabla y la condicion de la consulta
	function select1($attr,$table,$where)
	{
		// Se crea la consulta
		$query = "SELECT ".$attr." FROM ".$table." WHERE ".$where.";";
		// El objeto result invoca al objeto link de la conexion y usa su metodo propio query para ejecutar la consulta
		$result = $this->link->query($query);
		// Si el result es mayor a 0 es porque la consulta fue exitosa
		if ($result->num_rows > 0) {
			// Se itera la consulta y se almacena como un array
			while ($row = $result->fetch_assoc() ) {
				$response[] = $row;
			}
			// Se devulve el array iterado
			return $response;
		}
	}
}

?>