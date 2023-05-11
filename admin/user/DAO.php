<?php 

class DAO{
    private static $host="localhost";
    private static $dbname = "cinema";
    private static $port ="3306";
    private static $charset = "UTF8";
    private static $dsn= "mysql:host=".self::$host.";dbname=".self::$dbname.";port=".self::$port.";charset=".self::$charset;

    public static function getDbh(){
        return new PDO(self::$dsn,"root", "");
    }

}

?>