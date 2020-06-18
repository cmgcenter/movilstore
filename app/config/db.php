<?php 

//creamos la clase de base de datos.
class db
{
    /**
     * Única instancia de la clase
     */
    private static $database = null;
    private static $dbConnection = array();

    /**
     * Instancia de PDO
     */
    private static $pdo;

    final private function __construct()
    {
        try 
        {
            // Crear nueva conexión PDO
            self::obtenerBD();
        } 
        catch (PDOException $e) 
        {
            // Manejo de excepciones
        }
    }

    /**
     * Retorna en la única instancia de la clase
     * @return ConexionBD|null
     */
    public static function obtenerInstancia()
    {
        if (self::$database === null) {
            self::$database = new self();
        }
        return self::$database;
    }

    /**
     * Crear una nueva conexión PDO basada
     * en las constantes de conexión
     * @return PDO Objeto PDO
     */
    public function obtenerBD()
    {
        if (self::$pdo == null) {
            self::$pdo = new PDO(
                'mysql:dbname=' .$manager->settings['dbConnection']['database'].
                ';host=' . $manager->settings['dbConnection']['host'] . ";",
                $manager->settings['dbConnection']['user'],
                $manager->settings['dbConnection']['pass'],
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );

            // Habilitar excepciones
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$pdo;
    }

    /**
     * Evita la clonación del objeto
     */
    private function __clone()
    { }

    final protected function closeDB()
    {
    	//destruimos la instancia de la coneccion
        //self::$database->close();
        self::$database = null;
    }
}

?>