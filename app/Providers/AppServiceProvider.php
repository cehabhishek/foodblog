<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFour();
        view()->composer('*', function ($view) {
            $categories = Category::all();
            $view->with('categories', $categories);
        });
        view()->composer('*', function ($view) {
            $posts = Post::latest()->get();
            $view->with('posts', $posts);
        });
    }
}
