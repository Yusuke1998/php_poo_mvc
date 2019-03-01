<?php 
/**
 * Dashboard o vista controlador principal
 */
class Principal extends Controllers
{
	function __construct()
	{
		parent::__construct();
	}

	function principal(){
		$username = Session::getSession('User');
		if (!empty($username)) {
			$this->view->render($this,'Principal');
		}else{
			header('Location:'.URL);
		}
	}


}

?>