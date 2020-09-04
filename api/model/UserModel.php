<?php

namespace Model;
use Core\UserInterface;

class UserModel extends User implements UserInterface
{

    public static function userLogin($request) : UserModel
    {
        // TODO: Implement userLogin() method.
        return new UserModel;
    }

    public function userInsert() : UserModel
    {
        // TODO: Implement userInsert() method.
        return new UserModel;
    }

    public function userDelete() : void
    {
        // TODO: Implement userDelete() method.
    }

    public function updateUser()  : UserModel
    {
        // TODO: Implement updateUser() method.
        return new UserModel;
    }
}