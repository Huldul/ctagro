<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Carbon\Carbon;
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
        // Устанавливаем русскую локализацию для Carbon
        Carbon::setLocale('ru');
        Blade::directive('trans', function ($expression) {
            return "<?php echo trans_array($expression, app()->getLocale()); ?>";
        });
    }
}
