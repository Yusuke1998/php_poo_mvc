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
		if (!empty($_POST['email']) && !empty($_POST['password'])) {
			// La variable response se convierte en un objeto que contendra el resultado de la consulta
			$response = $this->model->userLogin('*',"email = '".$_POST['email']."'");
			// Se obtiene la consulta en la posicion 0 y se almacena en la variable response, ahora es un array
			$response = $response[0];
			// Si la password de la db es igual a la password recibida del formulario se imprime 1
			if ($response['password'] == $_POST['password']) {
				$this->createSession($response['username']);
				echo 1;
			}
		}else{
			echo "No hay coincidencia";
		}
	}

	// Se crea un metodo para realizar la logica de registro de usuario
	public function signIn(){
		if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['username']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])) {

			$response = $this->model->userLogin('*',"email = '".$_POST['email']."'");

			if ($response[0]) {
				echo 2;
			}else{
				// $registro = [
				// 	'username'	=>	$_POST['username'],
				// 	'firstname'	=>	$_POST['firstname'],
				// 	'lastname'	=>	$_POST['lastname'],
				// 	'email'		=>	$_POST['email'],
				// 	'password'	=>	$_POST['password'],
				// ];

				$registro['username'] 	= $_POST['username'];
				$registro['firstname'] 	= $_POST['firstname'];
				$registro['lastname'] 	= $_POST['lastname'];
				$registro['email'] 		= $_POST['email'];
				$registro['password'] 	= $_POST['password'];

				$this->model->userRegister($registro);
				echo 1;
			}
		}
	}

	public function createSession($user){
		// Se asigna un nombre a la session y un dato en este caso el nombre del usuario
		Session::setSession('User',$user);
	}

	public function destroySession(){
		Session::destroy();
		header('Location:'.URL);
	}
} 

?>