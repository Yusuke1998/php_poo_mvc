<?php
	/**
	 * 
	 */
	class Views
	{	
		function __construct()
		{

		}

		public function render($controller,$view){
			$controllers = get_class($controller);
			require VIEWS.DFT."head.php";
			require VIEWS.$controllers.'/'.$view.'.php';
			require VIEWS.DFT."footer.php";
		}
	}

?>