<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',"IndexController@index");
Route::get('news/detail/{id?}',"NewsController@detail")->where(['id'=>'\d+']);
Route::get('nlister/{id?}',"NewsController@lister");
Route::post("comment/save",function(){
	var_dump($_POST);
	return "保存成功";
});
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
	Route::get('/',"IndexController@index");
	Route::get('login',"LoginController@index");
	Route::post('check',"LoginController@check");
	Route::get('logout',"LoginController@logout");
	Route::get('news/add',"NewsController@add");
	Route::post('news/save',"NewsController@save");
	Route::get("news/oper","NewsController@oper");
	Route::get("news/oper1","NewsController@oper1");
	Route::get("news/tongji","NewsController@tongji");
	Route::get('type/add',"TypeController@add");
	Route::post('type/save',"TypeController@save");
	Route::get("type/oper","TypeController@oper");
	Route::get("type/update/{id}","TypeController@update");
	Route::post('type/usave',"TypeController@usave");
	Route::get('type/del/{id}',"TypeController@del");
});

Route::get('view/index','Admin\ViewController@index');
Route::get('view/create','Admin\ViewController@create');
Route::get('view/show/{id}','Admin\ViewController@show');








