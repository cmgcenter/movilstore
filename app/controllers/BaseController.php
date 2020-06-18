<?php


class  BaseController
{
	protected static $manager;
	protected static $utils;
	protected static $render;
	
	public static function Base()
	{
		//aca cargamos todos los modelos, clases, Etc.
		self::$manager = new manager();
		self::$utils = new utils();
		self::$render = new render();
	}

}



?>