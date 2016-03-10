<?php


namespace danielestefanucci\dsAlert;

use Illuminate\Support\ServiceProvider;


class dsAlertServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishFiles();
        $this->loadViewsFrom(__DIR__ . '/views', 'dsalerts');
    }

    /**
     * Registra l'helper dell'applicazione.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/helpers.php';
    }

    /**
     * Pubblica i file necessari.
     */
    protected function publishFiles()
    {
        $this->publishes([
            __DIR__ . '/librerie/sweetalert.css' => base_path('resources/assets/css/sweetalert.css'),
            __DIR__ . '/librerie/sweetalert.js' => base_path('resources/assets/js/sweetalert.js'),
            __DIR__ . '/views/dsalerts.blade.php' => base_path('resources/views/vendor/dsalerts/dsalerts.blade.php'),
        ], 'dsalerts');
    }
}