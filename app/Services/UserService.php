<?php

namespace App\Services;

use App\Interfaces\IUsersRepository;

class UserService extends Services
{
    private $usersRepository;

    public function __construct(IUsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function getAll()
    {
        try
        {
            return $this->usersRepository->getAll();
        }
        catch(\Exception $e)
        {
            return $this->error($e);
        }
    }

    public function getByName(string $userName)
    {
        try
        {
            return $this->usersRepository->getByName($userName);
        }
        catch(\Exception $e)
        {
            return $this->error($e);
        }
    }
}
