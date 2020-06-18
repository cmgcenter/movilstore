<?php
  class manager
  {
    /// The site paramets
    public $settings = array();
    //nbombre del sitio
    public $siteName;
    //version de la api
    public $apiVersion;



    function __construct()
    {
      $this->LoadSettings();
    }

    #cargamos los ajustes del sitio
    function LoadSettings()
    {
        #buscamos y cargamos el archivo de Settings.php
        if(file_exists(ROOT."/app/config/data.env"))
        {
            $this->settings = parse_ini_file(ROOT."/app/config/data.env", true);
        }
        else
        {
            if(file_exists("../app/config/data.env"))
            {
                $this->settings = parse_ini_file("../app/config/data.env", true);
            }
            else
            {
                die("The configuration file doesn't exist!");
            }
        }
        #establecemos la zona horaria segun el setting
        date_default_timezone_set($this->settings["website"]["time_zone"]);
        #estabecemos el template
        //$this->SetTemplate();
        //establecmos el nombre del sitio
        $this->siteName = $this->settings["website"]["siteName"];
        //establecemos la api del sitio.
        $this->apiVersion = $this->settings["api"]["apiVersion"];
    }

    function write_ini_file($file, array $options)
    {
      $tmp = '; <?php exit;?>';
      $tmp.="\n\n";
      foreach($options as $section => $values){
        $tmp .= "[$section]\n";
        foreach($values as $key => $val){
          if(is_array($val)){
            foreach($val as $k =>$v){
              $tmp .= "{$key}[$k] = \"$v\"\n";
            }
          }
          else
            $tmp .= "$key = \"$val\"\n";
        }
        $tmp .= "\n";
      }
      file_put_contents($file, $tmp);
      unset($tmp);
    }

    function userRoll()
    {
      $u = intval(1);
      if(isset($_SESSION['roll']))
      {$u = intval($_SESSION['roll']);}
      elseif(isset($_COOOKIE['roll']))
      {$u = intval($_COOOKIE['roll']);}
      else{$u=1;}

      if($u == 1)
      {
        return "users";
      }
      else if($u == 99)
      {
        return "admins";
      }
    }

    final function __clone(){}

  }
?>