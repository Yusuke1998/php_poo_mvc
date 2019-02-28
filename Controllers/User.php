<?php 

Class User extends Controllers
{
	function __construct(){
		parent::__construct();
	}

	public function userLogin(){
		if (!empty($_POST['email'] && !empty($_POST['password']))) {
			echo 1;
		}
	}
} 

?>