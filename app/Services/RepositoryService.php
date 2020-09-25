<?php

namespace App\Services;

use App\Interfaces\IRepositoriesRepository;

class RepositoryService extends Services
{
    private $repositoriesRepository;

    public function __construct(IRepositoriesRepository $repositoriesRepository)
    {
        $this->repositoriesRepository = $repositoriesRepository;
    }

    public function getAll(string $user)
    {
        try
        {
            return $this->repositoriesRepository->getAll($user);
        }
        catch(\Exception $e)
        {
            return $this->error($e);
        }
    }
}
