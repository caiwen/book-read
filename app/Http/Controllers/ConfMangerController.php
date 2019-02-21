<?php
/**
 * Created by PhpStorm.
 * User: caiwen
 * Date: 2019/2/20
 * Time: 11:55
 */

namespace App\Http\Controllers;


use App\Servers\Zookeeper\ZookeeperClient;

class ConfMangerController extends Controller
{
    const CONFIG_PATH = "/config";
    /**
     * 发布配置
     */
    public function publish()
    {
        /**
         * @var  $zk ZookeeperClient
         */
        $zk = app('zkClient');
        $ret = $zk->set(self::CONFIG_PATH,json_encode(config('test')));
        echo "配置下发成功!!!";
    }
}