<?php
class User{
    private $userName;
    private $passwd;

    public function __destruct(){}
    public function __construct(){}
    public function __get($a){
        return $this->$a;
    }
    public function __set($a,$v){
        return $this->$a=$v;
    }
}