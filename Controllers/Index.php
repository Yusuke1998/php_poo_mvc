<?php 
/**
 * Controlador index
 */
class Index extends Controllers
{
	public $response;
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->response = $this->model->datosPersonales();
		$datos = $this->response;
		// Requerimos la vista index y colocamos la constante VIEWS porque contiene la direccion
		require(VIEWS.'index.php');
	}

	public function maria(){
		echo "Hola soy maria";
	}
}

?>