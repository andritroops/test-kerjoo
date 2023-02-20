<?php

namespace App\Providers;

use App\Services\AnnualLeave\AnnualLeaveImplementService;
use App\Services\AnnualLeave\AnnualLeaveInterfaceService;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AnnualLeaveInterfaceService::class,AnnualLeaveImplementService::class);
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
