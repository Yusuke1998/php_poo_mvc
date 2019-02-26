<?php 
/**
 * Model 
 */
class Index_model
{
	private $data = [];
	function __construct()
	{
		$this->data = ['PHP','JS','JAVA','C++'];
	}

	public function datosPersonales(){
		return $this->data;
	}
}

?>