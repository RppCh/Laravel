<?php
namespace App\Http\Controllers\Admin;
class IndexController extends BaseController{
	function index(){
		
		return view('admin.index');
	}
}