<?php

namespace Controller;

use Formatter\RequestFormatter;
use Formatter\ResponseFormatter;

use Model\UserModel;

class UserController
{

    private $request;

    public function __construct(RequestFormatter $request)
    {
        $this->request = $request;
    }

    public function doLogin()
    {
        UserModel::userLogin($this->request);
    }

    public function isLoggedIn()
    {
        return new RequestFormatter;
    }
}