<?php
namespace Oyleanu\JosClient;

use Illuminate\Foundation\Application as LaravelApplication;
use Laravel\Lumen\Application as LumenApplication;
use Illuminate\Support\ServiceProvider;

class JosClientServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }

    /**
     * Setup the config.
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__ . '/../config/jingdong_jos.php');
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('jingdong_jos.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('jingdong_jos');
        }
        $this->mergeConfigFrom($source, 'jingdong_jos');
    }

    /**
     * Register the service provider.
     * @return void
     */
    public function register()
    {
        $this->registerFactory($this->app);
        $this->registerManager($this->app);
    }

    /**
     * Register the factory class.
     * @param \Illuminate\Contracts\Foundation\Application | Laravel\Lumen\Application $app
     * @return void
     */
    protected function registerFactory($app)
    {
        $app->singleton('josclient.factory', function($app) {
            return new JosClientFactory();
        });
        $app->alias('josclient.factory', 'Oyleanu\JosClient\JosClientFactory');
    }

    /**
     * Register the manager class.
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @return void
     */
    protected function registerManager($app)
    {
        $app->singleton('josclient', function($app) {
            $config  = $app['config'];
            $factory = $app['josclient.factory'];
            return new JosClientManager($config, $factory);
        });
        $app->alias('josclient', 'Oyleanu\JosClient\JosClientManager');
    }

    /**
     * Get the services provided by the provider.
     * @return string[]
     */
    public function provides()
    {
        return [
            'josclient',
            'josclient.factory',
        ];
    }
}