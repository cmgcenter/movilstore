<?php

class lang
{
	
	function __construct($lang)
	{
		self::setLang($lang);
	}

	public function setLang($lang)
	{
		include $lang.'.php';
	}
}




?>