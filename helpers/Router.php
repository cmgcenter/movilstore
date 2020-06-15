<?php

	require 'Routes.php';

	class Router
	{
		public static $MyRoutes = array();

		function __construct($view)
		{
			self::run($view);
		}

		//creamos la funcion que arranca el router
		private static function run($view)
		{
			//cargamos los recursos
			self::$MyRoutes = ROUTES;

			//creamos el handler de las exepciones
			set_exception_handler(function ($exception) use ($view){
		
			    $body = array(
			        "status" => $exception->estado,
			        "msg" => utf8_encode($exception->getMessage() )
			    );
			    if ($exception->getCode()) 
			    {
			        $view->estado = $exception->getCode();
			    } 
			    else 
			    {
			        $view->estado = 500;
			    }
			
			    $view->imprimir($body);
			});
		
			//extraemos el segmento de la url
			if (isset($_GET['PATH_INFO']))
			{
		    	$seg = explode('/', $_GET['PATH_INFO']);
			} 
			else 
			{
				$seg = array(0 => 'home');
			}
			
		
			//obtenemos el recurso
			$recurso = array_shift($seg);
		
			//comprobamos existencia del recurso
			if (!in_array($recurso, self::$MyRoutes )) 
			{
		    	throw new ExcepcionAPI(ESTADO_EXISTENCIA_RECURSO, "No se reconoce el recurso al que intentas acceder");
			}
		
			//extraemos el metodo
			$metodo = strtolower($_SERVER['REQUEST_METHOD']);
		
			//finalmente filtramos el metodo
			switch ($metodo)
			{
		    	case 'get':
		    	case 'post':
		    	case 'put':
		    	case 'delete':
		        if (method_exists($recurso, $metodo))
        		{
        		    $respuesta = call_user_func(array($recurso, $metodo), $seg);
        		    $view->imprimir($respuesta/*, $opt*/);
        		    break;
        		}
		
		    	default:
        		// Método no aceptado
        		$view->estado = 405;
        		$body = [
        		    "status" => ESTADO_METODO_NO_PERMITIDO,
        		    "msg" => $recurso." Método no permitido",
        		];
        		$view->imprimir($body);
			}
		}

		final function __clone(){}
		
	}
?>