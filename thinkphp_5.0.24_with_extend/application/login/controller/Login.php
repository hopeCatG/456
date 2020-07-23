<?php
namespace app\login\controller;
use think\Request;
use think\Validate;
use think\Db;


class Login extends \think\Controller
{

	public function login (Request $Request) {
		$method =  $Request -> method();
		if ($method == "GET") 
		{
			return view('login');
		} else {
			$data = $Request -> post();
			$this -> my([                       
    	 	 'name' => 'require',
    	 	 'password' => 'require'
    	 ],$data);
			$data['name'];
			$userData = Db::table('aa') -> where('name',$data['name']) -> select();
			if (!$userData) throw new \think\exception\HttpException(404, "用户名未注册！", null, [1]);
			if ($userData[0]['password'] == md5($data['password'])) {
				$jsonData = [
					"code" => 200,
					"登录成功",
				];
			} else {
				throw new \think\exception\HttpException(404, "用户名或密码错误", null, [1]);
			}

		 return json($jsonData);	
		}
	}

    public function register()
    {
        return view('index');
    }

    public function rgs(Request $Request)
    {
    	$method =  $Request -> method();
		if ($method == "GET") 
		{
			return $this->fetch('register');
		} else {
			$data = $Request -> post();
         $this -> my([                       
    	 	 'name' => 'require',
    	 	 'email' => 'email',
    	 	 'password' => 'require'
    	 ],$data);
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

    public function my($datas,$data)
    {
    	 $validate = new Validate($datas);

    	 $result = $validate->batch()->check($data);
  
        if(!$result){
		    foreach ($validate->getError() as $key => $value) {

		    	 throw new \think\exception\HttpException(404, $value, null, [1]);
		    }
		}
    }
}
