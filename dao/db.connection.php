<?php
class DbConnection extends PDO{
    private static $instance = null;
    
    public function __construct($dsn,$user,$pass){
        parent:: __construct($dsn,$user,$pass);
    }

    public static function getInstance(){
        if(!isset(self::$instance)){
            try{
                self::$instance = new DbConnection("mysql:dbname=login;host=localhost","root","");
            }catch(PDOExeption $e){
                echo "Erro: ".$e;
            }
        }
        return self::$instance;
    }
}