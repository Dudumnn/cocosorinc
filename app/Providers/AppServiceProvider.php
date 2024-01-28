<?php

namespace App\Providers;

use App\Models\User;
use App\Models\EmpUsers;
use App\Models\Worker;
use Illuminate\Support\ServiceProvider;

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
        //
        \View::share('title', 'Cocosor Inc');

        \View::composer('user.index', function($view){
            $view->with('users', Worker::all());
        });
    }
}
