<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class BaseController extends Controller{

	function __construct(){
		$arr=[
		['id'=>1,'tname'=>'国内'],
		['id'=>2,'tname'=>'国际'],
		];
		return view()->share(['headerNarArr'=>$arr]);
	}
}