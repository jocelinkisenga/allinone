<?php

namespace App\Providers;

use App\Contracts\Client\CompanyFrontInterface;
use App\Contracts\Manager\CompanyRepositoryInterface;
use App\Repositories\Client\CompanyFrontRepositorie;
use App\Repositories\Manager\CompanyRepositorie;
use Illuminate\Support\ServiceProvider;

class RepositorieProvider extends ServiceProvider
{

    protected array $repositorie = [
        CompanyFrontInterface::class => CompanyFrontRepositorie::class,
        CompanyRepositoryInterface::class => CompanyRepositorie::class,

];


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
        foreach ($this->repositorie as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
