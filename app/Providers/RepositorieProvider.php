<?php

namespace App\Providers;

use App\Contracts\Assets\UploadFileInterface;
use App\Contracts\Client\CompanyFrontInterface;
use App\Contracts\Manager\CategorieRepositoryInterface;
use App\Contracts\Manager\CompanyRepositoryInterface;
use App\Contracts\Manager\ProductRepositorieInterface;
use App\Repositories\Client\CompanyFrontRepositorie;
use App\Repositories\Manager\CategorieRepositorie;
use App\Repositories\Manager\CompanyRepositorie;
use App\Repositories\Manager\ProductRepositorie;
use App\Utilities\FileUploadUtility;
use Illuminate\Support\ServiceProvider;

class RepositorieProvider extends ServiceProvider
{

    protected array $repositorie = [
        CompanyFrontInterface::class => CompanyFrontRepositorie::class,
        CompanyRepositoryInterface::class => CompanyRepositorie::class,
        UploadFileInterface::class => FileUploadUtility::class,
        CategorieRepositoryInterface::class => CategorieRepositorie::class,
        ProductRepositorieInterface::class => ProductRepositorie::class
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
