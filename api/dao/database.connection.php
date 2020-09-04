<?php
// TODO Refactor this class
class DatabaseConnection extends \PDO{
    private static $instance = null;
    
    public function __construct($dsn,$user,$pass){
        parent:: __construct($dsn,$user,$pass);
    }

    public static function getInstance()
    {
        if(! isset(self::$instance)){
            try{
                self::$instance = new DatabaseConnection("mysql:dbname=login;host=localhost","root","");
            }catch(\PDOExeption $e){
                echo "Erro: ".$e;
            }
        }
        return self::$instance;
    }
}