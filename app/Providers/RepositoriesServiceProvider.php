<?php

namespace App\Providers;

use App\Repositories\admin\ManageApplicationsInterface;
use App\Repositories\admin\ManageApplicationsRepository;
use App\Repositories\ApplicationsInterface;
use App\Repositories\ApplicationsRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ManageApplicationsInterface::class,ManageApplicationsRepository::class);
        $this->app->bind(ApplicationsInterface::class,ApplicationsRepository::class);

    }
}
