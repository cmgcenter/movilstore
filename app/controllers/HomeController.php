<?php

/**
 * 
 */
class HomeController 
{

	public static function showError($name)
	{
		return  "Error: ".$name;
	}

	public static function index()
	{
		$data = array('title' => "index");
		$render = new render();
		return $render->addTemplates('login', $data);
	}

	public static function login() 
	{
		$render = new render();
		
		$data = array('title' => "Login");

		//return "login";

		return $render->addTemplates('login', $data);

	}

}


?>