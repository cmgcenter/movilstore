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
            
            if($isUnderConstruction == 'true')
            {
                return self::UnderConstruction($isUnderConstruction);
                die();
            }
            else
            {
                
                $data = $Data;

                if( file_exists(TEMPLATE.$tpl.".php") )
                {
                	include TEMPLATE.$tpl.".php";
                }
                else
                {
                	die(TEMPLATE.$tpl.".php" ." Not Fount");
                }
            }
            return '';
    	}

        public static function UnderConstruction($isUnderConstruction)
        {
            if($isUnderConstruction == 'true')
            {
                //si $under_construction esta en "true" mostramos la plantilla de 
                //under construction
                if( file_exists(UNDER_CONSTRUCTION_TPL."index.php") )
                {

                    
                    $data = array('title' => "Under Construction! ".$isUnderConstruction);
                    include UNDER_CONSTRUCTION_TPL."index.php";
                }
                else
                {
                    die("error: ".UNDER_CONSTRUCTION_TPL."index.php");
                }
            }
            return '';
        }

        public static function UnderMaintenance($isUnderMaintenance)
        {
            if($isUnderMaintenance == 'true')
            {
                //si $under_construction esta en "true" mostramos la plantilla de 
                //under construction
                if( file_exists(UNDER_CONSTRUCTION_TPL."index.php") )
                {

                    
                    $data = array('title' => "Under Maintenance! ");
                    include UNDER_CONSTRUCTION_TPL."index.php";
                }
                else
                {
                    die("error: ".UNDER_CONSTRUCTION_TPL."index.php");
                }
            }
            return '';
        }

	}


 ?>