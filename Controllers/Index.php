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
		// Requerimos la vista index y colocamos la constante VIEWS porque contiene la direccion
		$this->view->render($this,'index');
	}
}

?>