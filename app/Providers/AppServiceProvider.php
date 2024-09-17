<?php

namespace App\Providers;

use App\Repositries\ComplexRepositiry\{ComplexImp, ComplexInterface};
use App\Repositries\EarthLinkRepo\EarthLinkImpl;
use App\Repositries\EarthLinkRepo\EarthLinkInterface;
use App\Repositries\ShowRoomRepo\{ShowRoomImpl, ShowRoomInterface};
use App\Repositries\UserEarthLinkRepo\EarthLinkImpl as UserEarthLinkRepoEarthLinkImpl;
use App\Repositries\UserEarthLinkRepo\EarthLinkInterface as UserEarthLinkRepoEarthLinkInterface;
use App\Repositries\UserRepositiry\{UserImpl, UserInterface};
use App\Repositries\UserShowRoomRepo\UserShowRoomImp;
use App\Repositries\UserShowRoomRepo\UserShowRoomInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserInterface::class, UserImpl::class);
        $this->app->bind(ComplexInterface::class, ComplexImp::class);
        $this->app->bind(ShowRoomInterface::class, ShowRoomImpl::class);
        $this->app->bind(EarthLinkInterface::class, EarthLinkImpl::class);
        $this->app->bind(UserEarthLinkRepoEarthLinkInterface::class, UserEarthLinkRepoEarthLinkImpl::class);
        $this->app->bind(UserShowRoomInterface::class, UserShowRoomImp::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
