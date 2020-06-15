<?php

/**
 * 
 */
class home
{
	
	public static function get($get)
	{
		$manager = new Manager();
		$isUnderConstruction = $manager->settings['website']['under_construction'];
		
		if(empty($get[0]) || $get[0] == "home" || $get[0] == "index")
		{
			if( $isUnderConstruction == "true" )
			{
				return self::UnderConstruction();
			}
			else
			{
				return self::index("Home");
			}
			
		}
	}

	private static function UnderConstruction()
	{
		$render = new render();
		$data = array('title' => "Under Construction");
		$render->addTemplates('index', $data, 'true');
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