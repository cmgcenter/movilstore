<?php

	//definimos el ROOT
	if(!defined('ROOT'))
	{define('ROOT', dirname(__FILE__) );}

	//definimos el uri
	if(!defined('URI'))
	{define("URI", 'http://'.getallheaders()['Host']);}

	//definir la ruta de la app
	if(!defined('APP'))
	{define('APP', ROOT."/app/");}

	//incluimos el load.php
	include_once 'core/load.php';

	//iniciamos el router
	$router->run();

?>