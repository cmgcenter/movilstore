<?php

class users
{
	
	public static function get($get)
	{
		if( empty($get[0]) )
		{
			return self::index("Main");
		}
		else
		{
			if($get[0] == "login")
			{
				return self::index("Login Page");
			}
		}
	}

	private static function index($title)
	{
		$render = new render();

		$data = array('title' => $title);

		//aca llamamos a los modelos
		$render->addTemplates('home', $data);
	}
}


?>