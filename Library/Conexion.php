<?php 
/**
 * Conexion a la base de datos
 */
class Conexion extends Controllers
{
	function __construct()
	{
		$this->db = new QueryManager("localhost","root",'',"php_poo_mvc");
	}


}

?>