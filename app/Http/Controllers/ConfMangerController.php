<?php
/**
 * Created by PhpStorm.
 * User: caiwen
 * Date: 2019/2/20
 * Time: 11:55
 */

namespace App\Http\Controllers;


use App\Servers\Zookeeper\ZookeeperClient;
use Illuminate\Http\Request;

class ConfMangerController extends Controller
{
    const CONFIG_PATH = "/config";
    const CONFIG_SERVER_PATH = "/servers";

    /**
     * @var $zkClient  ZookeeperClient
     */
    protected $zkClient;

    public function __construct ()
    {
        $this->zkClient = app('zkClient');
    }

    public function index()
    {
        $serversChildren = $this->zkClient->getChildren(self::CONFIG_SERVER_PATH);
        $configs = $this->zkClient->get(self::CONFIG_PATH);
        return view('conf-manger.index',[
            'siteTitle'=>'配置中心demo',
            'activeServerList' => $serversChildren,
            'curConfigs' => !empty($configs) ? json_decode($configs,true) : []
        ]);
    }

    /**
     * 发布配置
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function publish(Request $request)
    {

        $data = $request->all();
        if (!empty($data)) {
            $postCnf = [
                $data['key'] => $data['value']
            ];
            $ret = $this->zkClient->get(self::CONFIG_PATH);
            if (!empty($ret)) {
                $retArr = \GuzzleHttp\json_decode($ret,true);
                $postCnf = array_merge($retArr,$postCnf);
            }
            $this->zkClient->set(self::CONFIG_PATH,\GuzzleHttp\json_encode($postCnf));
        }
        return response()->json([
            'status' => 1,
            'msg'    => '成功',
            'data'   => [],
        ]);
    }
}