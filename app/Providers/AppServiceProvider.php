<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\BoundedContext\Main\Users\Domain\Repositories\UserRepository;
use Src\BoundedContext\Main\Users\Infrastructure\Interfaces\AuthServiceInterface;
use Src\BoundedContext\Main\Users\Infrastructure\Repositories\UserRepositoryEloquent;
use Src\BoundedContext\Main\Users\Infrastructure\Services\AuthService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->bindRepositories();
        $this->app->bind(AuthServiceInterface::class, AuthService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    private function bindRepositories(): void
    {
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
    }
}
