&lt;?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app(\Illuminate\Cache\RateLimiter::class)->for('global', function () {
            return \Illuminate\Cache\RateLimiting\Limit::perMinute(30)->by(request()->ip()); // update here
        });
    }
}
