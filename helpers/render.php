<?php 
	
	/**
	 * 
	 */
	class render
	{
		public static function addTemplates($tpl, $Data=array())
    	{
            //establecemos el roll al momento del login, de lo contrario sera 0
            $roll = utils::userRoll(1);

        	if( file_exists(TEMPLATE.$roll.'/'.$tpl.".php") )
        	{
                $data = $Data;
        		include TEMPLATE.$roll.'/'.$tpl.".php";
        	}
        	else
        	{
        		die(TEMPLATE.$roll.'/'.$tpl.".php" ." Not Fount");
        	}
    	}
	}


 ?>