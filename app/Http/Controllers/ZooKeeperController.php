<?php
/**
 * Created by PhpStorm.
 * User: caiwen
 * Date: 2019/2/19
 * Time: 18:58
 */

namespace App\Http\Controllers;


use App\Servers\Zookeeper\ZookeeperClient;

class ZooKeeperController extends Controller
{
    public function test ()
    {
        /**
         * @var  $zk ZookeeperClient
         */
        $zk = app('zkClient');
        /*
        $data = $zk->loadNode("/servers");
        print_r($data);*/

        /*$zk = new ZookeeperClient('localhost:2181');
        var_dump($zk->get('/'));
        var_dump($zk->getChildren('/'));
        var_dump($zk->set('/test123', 'abc'));
        var_dump($zk->get('/test123'));
        var_dump($zk->getChildren('/'));

        var_dump($zk->set('/foo/001', 'bar1'));
        var_dump($zk->set('/foo/002', 'bar2'));
        var_dump($zk->getChildren('/foo'));*/

        //watch example
        function callback() {
            echo "in watch callback\n";
        }
        $zk->set('/bar', 1);
        $ret = $zk->watch('/bar', 'callback');
        $zk->set('/bar', 2);
        while (true) {
            sleep(1);
        }
    }
}