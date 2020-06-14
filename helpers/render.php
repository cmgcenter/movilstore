<?php 
	
	/**
	 * 
	 */
	class render
	{
		public static function addTemplate($tpl, $data=array())
    	{
        	$data = $data;

        	if( file_exists(TEMPLATE.$tpl.".php") )
        	{
        		include TEMPLATE.$tpl.".php";
        	}
        	else
        	{
        		die($tpl ." Not Fount");
        	}
    	}
	}


 ?>