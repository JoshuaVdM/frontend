<?php
/**
 * Created by PhpStorm.
 * User: Ludo
 * Date: 31/03/2017
 * Time: 12:29
 */

namespace Integration\API\Providers;


use Integration\API\Services\VisitorService;
use October\Rain\Support\ServiceProvider;

class VisitorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('VisitorService', function() {
            return new VisitorService();
        });
    }
}