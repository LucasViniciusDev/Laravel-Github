<?php

namespace App\Repositories;

use App\Interfaces\IRepositoriesRepository;
use App\Helpers\Http\HttpRequest;

class RepositoriesRepository implements IRepositoriesRepository
{
    public function getAll(string $user)
    {
        return HttpRequest::instance()->get("users/{$user}/repos");
    }
}
