<?php

class DB{
    private static $host = "localhost";
    private static $dbname = "education2";
    private static $port = 3306;
    private static $user = "root";
    private static $pwd = "";

    public static function connect(){
        try {
            $cc = "mysql:dbname=" . self::$dbname . ";";
            $cc .= "host=" . self::$host . ";";
            $cc .= "port=" . self::$port; 

            return new PDO($cc, self::$user, self::$pwd);
        }catch(PDOEXception $e){
            return null;
        }
    }
}