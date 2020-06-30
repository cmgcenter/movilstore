<?php

	
	//por defecto
	$router->add('/', function ()
	{
		return HomeController::index();
	});
		
	

	$router->add('/index', 'HomeController::index');
	$router->add('/login', 'HomeController::login');

	//manejo de errores
	$router->add('/error/:num', 'HomeController::showError');
	$router->add('/NoGameFound/:errorCode', 'HomeController::ErrorNoGameFound');


	$router->add('/game/:id', 'GamesController::showGame');



	//$router->add('/productos/:name', 'ProductsController::show');
	//$router->add('/login', 'ProductsController::login');
	
	// /ruta/con/un/monton/de/parametros
	/*$router->add('/:a/:b/:c/:d/:e/:f', function ($a, $b, $c, $d, $e, $f)
	{
		return "$a<br>$b<br>$c<br>$d<br>$e<br>$f";
	});*/


?>