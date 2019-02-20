<?php
/**
 * Created by PhpStorm.
 * User: caiwen
 * Date: 2019/2/19
 * Time: 18:40
 */

namespace App\Providers;
use App\Servers\Zookeeper\ZookeeperClient;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class ZookeeperServiceProvider extends ServiceProvider
{
    /**
     * 延迟加载
     * @var bool
     */
    protected $defer = true;

    public function register()
    {
    }

    /**
     * 启动
     */
    public function boot()
    {
        $this->app->singleton('zkClient', function() {
            return new ZookeeperClient(config('zk.zkServer'));
        });
    }

    public function provides()
    {
        return ['zkClient'];
    }
}