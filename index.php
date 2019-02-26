<?php 
require('config.php');
// Creamos una varible que contendra los parametros recibidos por la barra de direcciones
$url = (!empty($_GET['url']))?$_GET['url']:'Index/index';
// Se separa en un array cada vez que se encuentre una barra '/'
$url = explode('/', $url);

// Si el array en la posicion cero esta definido se asigna a una variable $controller
if (isset($url[0])) {
	$controller = $url[0];
}
// Si el array en la posicion uno esta definido se asigna a una variable $model
if (isset($url[1])) {
	$method = $url[1];
}
// Aqui se autocargan las clases de todos los archivos existentes en la carpeta Library
spl_autoload_register(function($class){
// Si existen los archivos se les llama
	if (file_exists(LBS.$class.".php")) {
		require(LBS.$class.".php");
	}else{
		echo "No se entrontro la clase!";
	}
});

// Creamos una variable que contengas la direccion de todos los controladores
$controllerPath = 'Controllers/'.$controller.'.php';
// Verificamos si existe dicho archivo señalado en '$controllerPath'
if (file_exists($controllerPath)) {
	require($controllerPath);
	// Instanciamos el controlador que recibimos por url luego de verificar que si existe
	$controller = new $controller;
	// Verificamos que exista la variable $method
	if (isset($method)) {
		// Verificamos que exista el metodo en el controlador instanciado
		if (method_exists($controller, $method)) {
			// Invocamos el metodo del controlador
			$controller->$method();
		}else{
			echo "El metodo no existe D:";
		}
	}
}else{
	echo "No se entrontro el controlador";
}

?>