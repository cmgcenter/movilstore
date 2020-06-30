<?php


class  BaseController
{
	protected static $manager;
	protected static $utils;
	protected static $render;

	//modelos
	protected static $modelHome;
	protected static $modelGames;
	
	public static function Base()
	{
		//parent::Base();
		//aca cargamos todos los modelos, clases, Etc.
		self::$manager = new manager();
		self::$utils = new utils();
		self::$render = new render();
		//modelos
		self::$modelHome = new ModelHome();
		self::$modelGames = new ModelGames();

	}

}



?>