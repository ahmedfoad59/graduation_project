<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */

    protected $namespace = 'App\Http\Controllers';
    protected $namespaceClient = 'App\Http\Controllers\Api\Client';
    protected $namespaceEmployee = 'App\Http\Controllers\Api\Employee';
    protected $namespaceGuest = 'App\Http\Controllers\Api\Guest';

    public const HOME ='/dashboard/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            // Route::prefix('api')
            //     ->middleware('api')
            //     ->namespace($this->namespace)
            //     ->group(base_path('routes/api.php'));


            Route::middleware('web')
                ->group(base_path('routes/web.php'));

           Route::prefix('Guest')
            ->middleware('authGuest')
            ->namespace($this->namespaceGuest)
            ->group(base_path('routes/api.php'));
 


                // Route::prefix('api')
                // ->middleware('api')
                // ->namespace($this->namespace)
                // ->group(base_path('routes/api.php'));


            Route::prefix('client')
            ->middleware('api')
            ->namespace($this->namespaceClient)
            ->group(base_path('routes/client.php'));

            Route::prefix('employee')
            ->middleware('api')
            ->namespace($this->namespaceEmployee)
            ->group(base_path('routes/employee.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
