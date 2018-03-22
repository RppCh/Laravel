<?php
namespace App\Http\Controllers;
class IndexController extends BaseController{
	function index(){
		return view("index.index");
	}
}