<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\IUsersRepository;
use App\Interfaces\IRepositoriesRepository;
use App\Repositories\UsersRepository;
use App\Repositories\RepositoriesRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IUsersRepository::class, UsersRepository::class);
        $this->app->bind(IRepositoriesRepository::class, RepositoriesRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
