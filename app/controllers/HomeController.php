<?php


class HomeController extends BaseController
{
	
	public static function index()
	{
		/*Se instancia en todas las funciones de todos los controladroes*/
		parent::Base();

		//obtenemos los juegos que se mostraran en el slider
		$gamesOnSlider = self::$modelGames->GetSliderPost();
		
		//$img = count($gamesOnSlider[0]['galery']);

		$data = array(
			'title' => self::$manager->settings['website']['siteName']." - Home",
			'GamesOnSlider' => $gamesOnSlider,
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

	public static function showError($num)
	{
		echo "Error: ".$num."<br> <a href='http://mvc.ts/'>Back</a>";
		echo '<meta http-equiv="refresh" content="3;http://mvc.ts" />';
	}

	public static function ErrorNoGameFound($errorCode)
	{
		parent::Base();
		
		$errorCode = self::$utils->protect($errorCode);

		$data = array(
			"title" => 'Error! - '.GAME_NO_FOUND,
			"msg" => GAME_NO_FOUND,
			"errorCode" => intval($errorCode),
		);

		return self::$render->addTemplates('errorPage', $data);

	}

}


?>