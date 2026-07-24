<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (!$this->app->bound('view')) {
            $this->app->register(\Illuminate\View\ViewServiceProvider::class);
        }
        if (!$this->app->bound('db')) {
            $this->app->register(\Illuminate\Database\DatabaseServiceProvider::class);
        }
        if (!$this->app->bound('session')) {
            $this->app->register(\Illuminate\Session\SessionServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force HTTPS on Vercel, production, or proxy-forwarded requests
        if (
            (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ||
            (request()->header('x-forwarded-proto') === 'https') ||
            isset($_SERVER['VERCEL']) ||
            isset($_SERVER['VERCEL_ENV']) ||
            config('app.env') === 'production'
        ) {
            URL::forceScheme('https');
            if (isset($this->app['request'])) {
                $this->app['request']->server->set('HTTPS', 'on');
            }
        }
    }

}
