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

	public function signIn(){
		// Requerimos la vista signIn y colocamos la constante VIEWS porque contiene la direccion, '$this' significa que hacemos referencia al controlador en el que estamos
		$this->view->render($this,'signIn');
	}
}

?>