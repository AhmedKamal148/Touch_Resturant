<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /*----- admin -----*/
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminInterface',
            'App\Http\Repositories\Admin\AdminRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\CategoryInterface',
            'App\Http\Repositories\Admin\CategoryRepository'
        ); // Category

        $this->app->bind(
            'App\Http\Interfaces\Admin\MealInterface',
            'App\Http\Repositories\Admin\MealRepository'
        ); // meal

        /*---- EndUser ----*/
        $this->app->bind(
            'App\Http\Interfaces\HomeInterface',
            'App\Http\Repositories\HomeRepository'
        );
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
