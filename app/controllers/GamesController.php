<?php


class GamesController extends BaseController
{
	
	public static function showGame($id)
	{
		/*Se instancia en todas las funciones de todos los controladroes*/
		parent::Base();

		if(isset($_REQUEST['t'])){$url = $_REQUEST['t'];}else{$url="none";}
		if(isset($_REQUEST['d'])){$from = $_REQUEST['d'];}else{$from="none";}
		if( !intval($id) ){ self::$utils->GoTo("NoGameFound/404/"); }

		//obtenemos el juego por ID del modelo
		$Game = self::$modelGames->getGame(intval($id));

		if( !isset($Game['Game']) )
		{
			self::$utils->GoTo("NoGameFound/404/");
			die();
		}
		
		//$img = count($gamesOnSlider[0]['galery']);
		$gameToShow = $Game['Game'];

		$data = array(
			'title' => self::$manager->settings['website']['siteName']." - ".$gameToShow['title'],
			'Game' => $gameToShow,
			'Galery' => $gameToShow['galery'],
			'GameData' => $Game['GameData'],
		);

		 //apache_response_headers();

		//return $url ."  -  ".$data['Game']['url'];
		// self::$utils->Validate($gameToShow['url'], self::$utils->protect($url));

		//retornamos el vista con los datos cargados
		return  self::$render->addTemplates('showGame', $data);
	}

}


?>