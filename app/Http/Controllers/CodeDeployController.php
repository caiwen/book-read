<?php
/**
 * Created by PhpStorm.
 * User: caiwen
 * Date: 2019/2/26
 * Time: 19:50
 */

namespace App\Http\Controllers;
use App\Servers\Zookeeper\ZookeeperClient;
use Illuminate\Http\Request;

class CodeDeployController extends Controller
{
    const DEPLOY_CONFIG_PATH = "/app/business/config";
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
        return view('code-deploy.index',[
            'siteTitle'=>'代码部署demo',
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function publish(Request $request)
    {
        $data = $request->all();
        if (!empty($data)) {
            $this->zkClient->set(self::DEPLOY_CONFIG_PATH,\GuzzleHttp\json_encode($data));
        }
        return response()->json([
            'status' => 1,
            'msg'    => '成功',
            'data'   => [],
        ]);
    }
}