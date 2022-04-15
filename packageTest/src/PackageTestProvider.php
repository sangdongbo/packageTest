<?php

namespace Www;

use Illuminate\Support\ServiceProvider;

class PackageTestProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //扩展包的默认配置
        $this->publishes([
            __DIR__.'/config/packageTest.php' => config_path('packageTest.php'), // 发布配置文件到 laravel 的config 下
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('packagetest', function () {
            return new PackageTestService();
        });
    }
}
