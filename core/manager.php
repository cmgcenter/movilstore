<?php
  class manager
  {
    /// The site paramets
    public $settings = array();
    //nbombre del sitio
    public $siteName;
    //version de la api
    public static $apiVersion;



    function __construct()
    {
      $this->LoadSettings();
    }

    static function CallStatic()
    {
      return static self::$this;
    }

    #cargamos los ajustes del sitio
    function LoadSettings()
    {
        #buscamos y cargamos el archivo de Settings.php
        if(file_exists(ROOT."/core/data.env"))
        {
            $this->settings = parse_ini_file(ROOT."/core/data.env", true);
        }
        else
        {
            if(file_exists("../core/data.env"))
            {
                $this->settings = parse_ini_file("../core/data.env", true);
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

  }
?>