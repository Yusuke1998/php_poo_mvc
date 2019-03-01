<?php 

/**
 * Clase encargada de la consulta para verificar al usuario
 */
class User_model extends Conexion
{
	
	function __construct()
	{
		parent::__construct();
	}

	// Este metodo recibe los campos de la db y la condicion
	function userLogin($fields,$where)
	{
		// Se retorna el resultado de la consulta
		return $this->db->select1($fields,'user',$where);
	}
}

?>