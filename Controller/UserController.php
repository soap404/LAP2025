<?php

namespace Controller;


use Model\User;

class UserController
{

    public static function index(): array
    {
        $user = new User();
        return $user->index();
    }
}