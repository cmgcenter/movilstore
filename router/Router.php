<?php

class Router {

	protected $requestUri;
	protected $routes;

	const GET_PARAMS_DELIMITER = '?';

	public function __construct($requestUri)
	{
		$this->routes = [];

		$this->setRequestUri($requestUri);
	}

	public function setRequestUri($requestUri)
	{
		if (strpos($requestUri, self::GET_PARAMS_DELIMITER))
		{
			$requestUri = strstr($requestUri, self::GET_PARAMS_DELIMITER, true);
		}
		$this->requestUri = $requestUri;
	}

	public function getRequestUri()
	{
		return $this->requestUri;
	}

	public function add($uri, $closure)
	{
		$route = new Route($uri, $closure);
		array_push($this->routes, $route);
	}

	public function run()
	{
		$response = false;
		$requestUri = $this->getRequestUri();

		foreach ($this->routes as $route)
		{
			if ($route->checkIfMatch($requestUri))
			{
				$response = $route->execute();
				// break para no seguir dando vueltas
				// Ya se encontró la ruta correspondiente
				break;
			}
		}

		$this->sendResponse($response);
	}

	public function sendResponse($response)
	{

		if (is_string($response))
		{
			//echo $response;
			print_r( $response );
			die();
		}
		else if (is_array($response))
		{
			//print_r( $response );
			echo json_encode($response);
			die();
		}
		else if ($response instanceof Response)
		{
			$response->execute();
			die();
		}
		else
		{
			http_response_code(404);
			//header("HTTP/1.0 404 Not Found");
			exit('404');
		}
	}

}
