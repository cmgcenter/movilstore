<?php
	
	//session
	if( !session_id() ){session_start();}


	//creamos unas cuantas constantes de codigos de estado
	CONST ESTADO_CREACION_EXITOSA = 1;
    CONST ESTADO_CREACION_FALLIDA = 2;
    CONST ESTADO_ERROR_BD = 3;
    CONST ESTADO_AUSENCIA_CLAVE_API = 4;
    CONST ESTADO_CLAVE_NO_AUTORIZADA = 5;
    CONST ESTADO_FALLA_DESCONOCIDA = 6;
    CONST ESTADO_PARAMETROS_INCORRECTOS = 7;
    CONST ESTADO_ERROR_DE_PAGINACION = 8;
    CONST ESTADO_PETICION_NO_EXISTE = 9;
    //constantes de inicio
    CONST ESTADO_URL_INCORRECTA = 10;// codigo de url incorrecta
    CONST ESTADO_EXISTENCIA_RECURSO = 11;
    CONST ESTADO_METODO_NO_PERMITIDO = 12;

	//definimos algunas constantes.
	CONST CURRENT_TEMPLATE = "default";
	CONST ASSETS_PATH = '/views/templates/'.CURRENT_TEMPLATE."/assets/";
	CONST TEMPLATE = ROOT.'/templates/'.CURRENT_TEMPLATE."/";
    CONST UNDER_CONSTRUCTION_TPL = ROOT.'/templates/underConstruction/';
    CONST UNDER_CONSTRUCTION_ASSETS = '/templates/underConstruction/';
	CONST USERS_IMAGES = '/views/images/users-images/';
	CONST DEFAULT_IMAGES = '/views/images/default-images/';
	CONST THIRDPARTY_PATH = '/thirdParty/';

    /* esta auto cargador de clases me sirvio en localhost, pero en servidor no me dio.
    *cargare las clases una a una. (privicional hasta hacer funcionar esto en el server.)
	spl_autoload_register( 'autoload' );
  	function autoload( $class, $dir = null )
  	{
    	//echo ' la clase es. '.$class.'<br>';//para saber lo que recive
    	if ( is_null( $dir ) )
    	{
      		$dir = ROOT."/";
    	}
    
    	foreach ( scandir( $dir ) as $file )
    	{
    		// directory?
      		if ( is_dir( $dir.$file ) && substr( $file, 0, 1 ) !== '.' )
      		{
      			//Esto lo he modificado ya que estoy hacienda las pruebas en wampServer Windows
        		autoload( $class, $dir.$file.'\\' );
      		}
     		
      		// php file?
      		if ( substr( $file, 0, 2 ) !== '._' && preg_match( "/.php$/i" , $file ) )
      		{
        		// filename matches class?
        		if ( str_replace( '.php', '', $file ) == $class || str_replace( '', '', $file ) == $class ) 
        		{
        			if(file_exists($dir.$file))
        			{
        				//echo  $dir.$file."<br>";
        				include $dir . $file;
        			}
            		
        		}
      		}
    	}
	}
    */

    //cargamos las clases dentro de app/controllers
    spl_autoload_register(function($class){

        if(file_exists("../app/controllers/".$class.".php"))
        {
            include_once "../app/controllers/".$class.".php";
        }
        else
        {
            if(file_exists("app/controllers/".$class.".php"))
            {
                include_once "app/controllers/".$class.".php";
            }
        }
    });

    //cargamos las clases dentro de app/models
    spl_autoload_register(function($class){

        if(file_exists("../app/models/".$class.".php"))
        {
            include_once "../app/models/".$class.".php";
        }
        else
        {
            if(file_exists("app/models/".$class.".php"))
            {
                include_once "app/models/".$class.".php";
            }
        }
    });

    //cargamos las clases dentro de app/views
    spl_autoload_register(function($class){

        if(file_exists("../app/views/".$class.".php"))
        {
            include_once "../app/views/".$class.".php";
        }
        else
        {
            if(file_exists("app/views/".$class.".php"))
            {
                include_once "app/views/".$class.".php";
            }
        }
    });

    //cargamos las clases dentro de core
    spl_autoload_register(function($class){

        if(file_exists("../core/".$class.".php"))
        {
            include_once "../core/".$class.".php";
        }
        else
        {
            if(file_exists("core/".$class.".php"))
            {
                include_once "core/".$class.".php";
            }
        }
    });

    //cargamos las clases dentro de helpers
    spl_autoload_register(function($class){

        if(file_exists("../helpers/".$class.".php"))
        {
            include_once "../helpers/".$class.".php";
        }
        else
        {
            if(file_exists("helpers/".$class.".php"))
            {
                include_once "helpers/".$class.".php";
            }
        }
    });


	//iniciamos todas las clases
	$utils = new utils();

	//cargamos el manager
	$manager = new manager();

    //iniciamos el view
    $view = new ViewHTML();

    //cargamos el router
    $router = new Router($view);
?>