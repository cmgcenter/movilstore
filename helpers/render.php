<?php 
	
	/**
	 * 
	 */
	class render
	{
		public static function addTemplates($tpl, $Data=array())
    	{
            $manager = new Manager();
            $isUnderConstruction = $manager->settings['website']['under_construction'];
            
            if($isUnderConstruction == true)
            {
                return self::UnderConstruction($isUnderConstruction);
                die();
            }
            else
            {
                $roll = utils::userRoll(1);
                $data = $Data;

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

        private static function UnderConstruction($isUnderConstruction)
        {
            if($isUnderConstruction == true)
            {
                //si $under_construction esta en "true" mostramos la plantilla de 
                //under construction
                if( file_exists(UNDER_CONSTRUCTION_TPL."index.php") )
                {
                    $data = array('title' => "Under Construction!");
                    include UNDER_CONSTRUCTION_TPL."index.php";
                }
                else
                {
                    die("error: ".UNDER_CONSTRUCTION_TPL."index.php");
                }
                
            }
        }
	}


 ?>