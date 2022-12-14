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

        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminChefInterface',
            'App\Http\Repositories\Admin\AdminChefRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\UserProfileInterface',
            'App\Http\Repositories\Admin\UserProfileRepository'
        );

        $adminRepos = [
            // Interface            // Repository
            'ContactUsInterface' => 'ContactUsRepository',
            'SettingInterface'   => 'SettingRepository',
            'AuthInterface'      => 'AuthRepository'
        ];

        foreach ($adminRepos as $interface => $repo) {
            $this->app->bind(
                "App\Http\Interfaces\Admin\\" . $interface,
                "App\Http\Repositories\Admin\\" . $repo
            );
        }

        /*---- EndUser ----*/
        $this->app->bind(
            'App\Http\Interfaces\HomeInterface',
            'App\Http\Repositories\HomeRepository'
        );

        $adminRepos = [
            // Interface            // Repository
            'ContactUsInterface' => 'ContactUsRepository',
            'SettingInterface'   => 'SettingRepository',
        ];

        foreach ($adminRepos as $interface => $repo) {
            $this->app->bind(
                "App\Http\Interfaces\EndUser\\" . $interface,
                "App\Http\Repositories\EndUser\\" . $repo
            );
        }
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
