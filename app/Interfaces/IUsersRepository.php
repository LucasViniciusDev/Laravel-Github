<?php

namespace App\Interfaces;

interface IUsersRepository
{
    public function getAll();
    public function getByName(string $userName);
}
