<?php 
/**
 * Controlador principal
 */
class Controllers
{
	function __construct()
	{
		$this->loadClassModels();
	}

	public function loadClassModels(){
		// Recibimos el nombre de la clase actual y se le concatena '_model' para diferenciar los modelos
		$model = get_class($this).'_model';
		// Se crea una varible con la direccion del modelo
		$path = "Models/".$model.".php";
		// Si existe el archivo lo requerimos
		if (file_exists($path)) {
			require($path);
			// Instanciamos la clase que viene por la variable model
			$this->model = new $model();
		}else{
			echo "El modelo no existe!";
		}
	}
}

?>