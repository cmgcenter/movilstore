<?php 
	
	/**
	 * 
	 */
	class render
	{
		public static function addTemplates($tpl, $Data=array(), $under_construction=false)
    	{
            //establecemos el roll al momento del login, de lo contrario sera 0
            $roll = utils::userRoll(1);
            $data = $Data;

            if($under_construction == true)
            {
                //si $under_construction esta en "true" mostramos la plantilla de 
                //under construction
                if( file_exists(UNDER_CONSTRUCTION_TPL."index.php") )
                {
                    include UNDER_CONSTRUCTION_TPL."index.php";
                }
                else
                {
                    die(UNDER_CONSTRUCTION_TPL."index.php");
                }
                
            }
            else
            {

        	   if( file_exists(TEMPLATE.$roll.'/'.$tpl.".php") )
        	   {
        	   	include TEMPLATE.$roll.'/'.$tpl.".php";
        	   }
        	   else
        	   {
        	   	die(TEMPLATE.$roll.'/'.$tpl.".php" ." Not Fount");
        	   }
            }
    	}
	}


 ?>