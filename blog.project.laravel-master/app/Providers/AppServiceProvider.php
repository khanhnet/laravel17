<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!\App::runningInConsole()) {
         // if (Schema::hasTable('categories')) {
            view()->share('categories', \App\Category::get());
            view()->share('admin', \App\User::where('id',1)->FirstOrFail());
        //}
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
