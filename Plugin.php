<?php namespace Sv\API;

use App;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function boot()
    {
        // Register Cors
        App::register('\Fruitcake\Cors\CorsServiceProvider');

        // Add cors middleware
        $this->app['Illuminate\Contracts\Http\Kernel']
            ->prependMiddleware(\Fruitcake\Cors\HandleCors::class);

    }

    public function register()
    {
        $this->registerConsoleCommand('sv.api.transformer', 'Sv\API\Console\CreateTransformer');
    }
}
