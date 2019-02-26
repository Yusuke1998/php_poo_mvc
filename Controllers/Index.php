<?php 
/**
 * Controlador index
 */
class Index
{
	function __construct()
	{
	}

	public function index(){
		// Requerimos la vista index y colocamos la constante VIEWS porque contiene la direccion
		require(VIEWS.'index.php');
	}

	public function maria(){
		echo "Hola soy maria";
	}
}

?>