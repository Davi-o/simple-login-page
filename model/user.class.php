<?php
class User{
    private $userName;
    private $passwd;
    private $fone;
    private $mail;

    public function __destruct(){}
    public function __construct(){}
    public function __get($a){
        return $this->$a;
    }
    public function __set($a,$v){
        return $this->$a=$v;
    }
    public function __toString(){
        return nl2br("
                Nome: $this->nome
                Email: $this->email
                Telefone: $this->fone
        ");
    }
}