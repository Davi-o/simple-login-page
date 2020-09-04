<?php

namespace Core;

interface UserInterface
{
    public static function userLogin($request);
    public function userInsert();
    public function userDelete();
    public function updateUser();
}