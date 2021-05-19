<?php

namespace Binlq0\Muse;

use Illuminate\Support\ServiceProvider;

class MuseServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    private static $SOURCE_NAME = 'muse';

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupRoutes();
        $this->setupViews();
    }

    /**
     * Setup Routes
     */
    private function setupRoutes()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    /**
     * Setup Views
     */
    private function setupViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', self::$SOURCE_NAME);
    }
}
