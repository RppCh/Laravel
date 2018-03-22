<?php
namespace App\Http\Controllers;
class NewsController extends BaseController{
	function detail($id){
		
		return view("news.detail");
	}
	function lister($tid=0){
		$arr=[
			['id'=>1,'title'=>'t1','pubtime'=>1234567890],
			['id'=>2,'title'=>'t2','pubtime'=>1234567891],
			['id'=>3,'title'=>'t3','pubtime'=>1234567892],
			['id'=>4,'title'=>'t4','pubtime'=>1234567893],
			['id'=>5,'title'=>'t5','pubtime'=>1234567894],
		];
		return view("news.lister",['arr'=>$arr]);
	}
}