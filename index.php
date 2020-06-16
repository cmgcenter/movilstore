<?php

	//definimos el ROOT
	define('ROOT', dirname(__FILE__) );

	//definimos el uri
	define("URI", 'http://'.getallheaders()['Host']);

	//definir la ruta de la app
	define('APP', ROOT."/app/");

	//incluimos el load.php
	include_once 'core/load.php';

	//iniciamos el router
	$router->run();

?>