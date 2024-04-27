<?php

namespace App\Providers;

use App\Services\Posts\PostService;
use App\Services\Posts\PostServiceImplement;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons = [
        PostService::class => PostServiceImplement::class
    ];

    public function provides(): array
    {
        return [PostService::class];
    }

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
