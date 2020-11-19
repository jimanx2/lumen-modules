<?php

namespace DummyNamespace\Providers;

use Caffeinated\Modules\Support\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'DummyNamespace\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the module.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        //
    }

    /**
     * Define the "api" routes for the module.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            // 'middleware' => 'auth:api',
            'namespace'  => $this->namespace,
            'prefix'     => 'api/DummySlug',
        ], function ($router) {
            require module_path('DummySlug', 'RoutesMapping/api.php', 'DummyLocation');
        });
    }
}
