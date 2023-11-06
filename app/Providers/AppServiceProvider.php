<?php

namespace App\Providers;

use App\Models\User;
use App\Models\EmpUsers;
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
        \View::share('title', 'User Admin');

        \View::composer('user.index', function($view){
            $view->with('emps', EmpUsers::all());
        });
    }
}
