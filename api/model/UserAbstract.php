<?php

namespace Model;

abstract class User
{
    private $userName;
    private $password;
    private $phoneNumber;
    private $email;

    public function __construct($userName, $password, $phoneNumber, $email)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
    }

    public function __destruct()
    {
        unset($this);
    }

    
    public function __get($a)
    {
        return $this->$a;
    }
}