<?php

namespace App\Repositories;

use App\Interfaces\IUsersRepository;
use App\Helpers\Http\HttpRequest;

class UsersRepository implements IUsersRepository
{
    public function getAll()
    {
        return HttpRequest::instance()->get('users');
    }

    public function getByName(string $userName)
    {
        return HttpRequest::instance()->get("users/{$userName}");
    }
}
