<?php
require_once 'db.connection.php';

class Dao{
    private $connection = null;

    public function __construct(){
        $this->connection = DbConnection::getInstance();
    }
    public function __destruct(){}
    
    public function registerPerson($personClass){
        //register on database here
    }
}