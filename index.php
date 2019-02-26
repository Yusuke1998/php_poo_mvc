<?php 

$url = (!empty($_GET['url']))?$_GET['url']:'Index/Index';
$url = explode('/', $url);

if (isset($url[0])) {
	$controller = $url[0];
}
if (isset($url[1])) {
	$method = $url[1];
}
echo "Controlador ".$controller." Metodo ".$method;



?>