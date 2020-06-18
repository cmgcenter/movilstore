<?php


class HomeController extends BaseController
{
	
	public static function index()
	{
		/*Se instancia en todas las funciones de todos los controladroes*/
		Parent::Base();

		$data = array(
			'title' => self::$manager->settings['website']['siteName']." - Home",
			'body' => 'el body',
			'Analitycs' => array('hits' => 1200, 'views' => 2500 ),
		);

		//retornamos el vista con los datos cargados
		return  self::$render->addTemplates('index', $data);
	}

	public static function login() 
	{
		$render = new render();
		
		$data = array('title' => "Login");

		//return "login";

		return $render->addTemplates('login', $data);

	}

	public static function showError($name)
	{
		return  "Error: ".$name;
	}

}


?>