<?php

namespace Controller;



use Requests\StoreUserRequest;
use Model\User;

class UserController
{

    public static function store($data): array|bool
    {
        $errors = StoreUserRequest::validate($data);

        if (count($errors) > 0) {
            return $errors;
        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $user = new User();
        $user->store($data);
        return true;
    }
}