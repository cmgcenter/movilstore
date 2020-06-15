<?php

/**
 * 
 */
class home
{
	
	public static function get($get)
	{
		if(empty($get[0]) || $get[0] == "home" || $get[0] == "index")
		{
			return self::index("Home");
		}
	}

	private static function index($title)
	{
		$render = new render();

		$data = array('title' => $title);

		//aca llamamos a los modelos
		$render->addTemplates('index', $data);
	}
}


?>