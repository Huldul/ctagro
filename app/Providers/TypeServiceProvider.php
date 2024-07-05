<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Type;

class TypeServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Share the 'types' variable with all views
        view()->composer('*', function ($view) {
            $view->with('types', Type::with('subtypes.subtypes.products')->get());
        });
    }
}
