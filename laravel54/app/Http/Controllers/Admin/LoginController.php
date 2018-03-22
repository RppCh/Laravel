<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class LoginController extends Controller{
	function index(){
		return view('admin.login');
	}
	/**
	 * 检查用户名密码是否正确
	 */
	function check(Request $request){
		$username=$request->get('username');
		$password=$request->get('password');
		if($username=='admin' && $password=='admin'){
			//登录成功
			session(['adminid'=>1,'username'=>$username]);
			return redirect('admin');
		}else{
			return redirect('admin/login');
		}
		
	}

	function logout(){
		session()->flush();
		return redirect('admin');
	}
		
		
		
		
		
}