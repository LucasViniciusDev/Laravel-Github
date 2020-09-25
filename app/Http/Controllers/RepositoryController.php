<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Services\RepositoryService;

class RepositoryController extends Controller
{
    private $userService;
    private $repositoryService;

    public function __construct(UserService $userService, RepositoryService $repositoryService)
    {
        $this->userService = $userService;
        $this->repositoryService = $repositoryService;
    }

    public function repositories($userName)
    {
        $repositoriesResult = $this->repositoryService->getAll($userName);

        if((isset($repositoriesResult) && isset($repositoriesResult->error)))
        {
            return view('error', [
                'error' => $repositoriesResult
            ]);
        }

        $repositories = $repositoriesResult->response;
        $user = count($repositories) > 0 ? $repositories[0]->owner : $this->userService->getByName($userName)->response;

        return view('repositories', [
            'user' => $user,
            'repositories' => $repositories
        ]);
    }
}
