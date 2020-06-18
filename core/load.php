<?php
	
	//session
	if( !session_id() ){session_start();}

    //incluimos las constantes 
    include_once 'const.php';

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
        //print_r($class."<br>");
    });

    $manager = new manager();
    
    //incluimos las definiciones
    include_once 'define.php';

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

    //cargamos las clases dentro de utils
    spl_autoload_register(function($class){

        if(file_exists("../utils/".$class.".php"))
        {
            include_once "../utils/".$class.".php";
        }
        else
        {
            if(file_exists("utils/".$class.".php"))
            {
                include_once "utils/".$class.".php";
            }
        }
    });

    //cargamos las clases dentro de router
    spl_autoload_register(function($class){

        if(file_exists("../router/".$class.".php"))
        {
            include_once "../router/".$class.".php";
        }
        else
        {
            if(file_exists("router/".$class.".php"))
            {
                include_once "router/".$class.".php";
            }
        }
    });

    //iniciamos todas las clases
    $utils = new utils();

    //tomamos la url del navegador
    $router = new Router($_SERVER['REQUEST_URI']);

    if(file_exists('../app/views/View.php'))
    {
        require '../app/views/View.php';
    }
    else
    {
        if(file_exists('app/views/View.php'))
        {
            require 'app/views/View.php';
        }
        else
        {
            http_response_code(404);
            die('La Vista no Existe!');
        }
    }

?>