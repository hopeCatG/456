<?php
namespace app\index\controller;
use think\Request;
use think\Validate;
use think\Db;

class Index
{
    public function index()
    {
        return view('index');
    }

    public function rgs(Request $Request)
    {
    	$data = $Request -> post();

    	 $validate = new Validate([                       
    	 	 'name' => 'require',
    	 	 'email' => 'email',
    	 	 'password' => 'require'
    	 ]);
    	 

    	 $result = $validate->batch()->check($data);
  
        if(!$result){
		    foreach ($validate->getError() as $key => $value) {

		    	 throw new \think\exception\HttpException(404, $value, null, [1]);
		    }
		}
        $data['password'] = md5($data['password']);
        $is = Db::table('aa') -> insert($data);

      if ($is) {
      	return json([
      		'code' => '200',
      		'msg' => "注册成功"
      	]);
      } else {
      	return json([
      		'code' => '444',
      		'msg' => "注册失败"
      	]);
      }
    }
}
