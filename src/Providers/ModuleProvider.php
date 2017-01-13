<?php namespace WebEd\Base\AssetsManagement\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use WebEd\Base\AssetsManagement\Facades\Assets;

class ModuleProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../resources/public' => public_path(),
        ], 'webed-public-assets');
    }

    public function register()
    {
        $this->app->bind('assets-management', \WebEd\Base\AssetsManagement\Assets::class);
        AliasLoader::getInstance()->alias('Assets', Assets::class);

        $this->mergeConfigFrom(__DIR__ . '/../../config/assets.php', 'assets');

        $this->app->register(BootstrapModuleServiceProvider::class);
    }
}
