<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;

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
        // Smart HTTPS detection - works on any hosting
        $this->configureHttps();
    }

    /**
     * Configure HTTPS based on environment detection
     */
    private function configureHttps(): void
    {
        $request = $this->app->make(Request::class);

        // Check if the request is actually HTTPS
        $isHttps = $request->isSecure();
        
        // Check for common proxy headers (Railway, Heroku, AWS, etc.)
        $proxyHttps = $request->server('HTTP_X_FORWARDED_PROTO') === 'https';
        $httpsViaProxy = $request->server('HTTPS') === 'on' || $request->server('HTTPS') === '1';
        
        // Force HTTPS if any of these conditions are true
        if ($isHttps || $proxyHttps || $httpsViaProxy) {
            URL::forceScheme('https');
        }
        
        // For production environments, you can also check APP_ENV
        if ($this->app->environment('production')) {
            // But still respect the actual request protocol
            if ($proxyHttps || $isHttps) {
                URL::forceScheme('https');
            }
        }
    }
}