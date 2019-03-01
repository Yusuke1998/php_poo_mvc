<?php 

Class User extends Controllers
{
	function __construct(){
		// Se inicia el constructor de la clase padre 'Controllers'
		parent::__construct();
	}

	// Se crea un metodo para realizar la logica de acceso del usuario al loguearse
	public function userLogin(){
		// Si el email y la password no estan vacias se procede
		if (!empty($_POST['email'] && !empty($_POST['password']))) {
			// La variable response se convierte en un objeto que contendra el resultado de la consulta
			$response = $this->model->userLogin('*',"email = '".$_POST['email']."'");
			// Se obtiene la consulta en la posicion 0 y se almacena en la variable response, ahora es un array
			$response = $response[0];
			// Si la password de la db es igual a la password recibida del formulario se imprime 1
			if ($response['password'] == $_POST['password']) {
				echo 1;
			}
		}
	}
} 

?>