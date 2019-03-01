<?php 
/**
 * Sesiones
 */
class Session
{
	static function start(){
		// Se inicia la sesion
		@session_start();
	}

	static function getSession($name){
		// El parametro que venga en el parametro name sera asignado como nombre a la session
		return $_SESSION[$name];
	}

	static function setSession($name,$data){
		// Se asigna el dato recibido a la sesion que tenga el nombre recibido
		return $_SESSION[$name] = $data;
	}

	static function destroy(){
		// Se destruye la sesion
		@session_destroy();
	}
}

?>