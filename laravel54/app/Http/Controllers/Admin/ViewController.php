<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$username = 'Tom';
    	$age = 22;
    	$sex = true; //男
    	$regdate = time();	
    	$data = [
    		'username'=>$username,
    		'age'     => $age,
    		'sex'     => $sex,
    		'regdate' => $regdate,
    		'users'   => ['张飞','李逵','曹雪芹','林黛玉'],
    		'userInfo'  => ['id'=>1,'username'=>'孙子','age'=>33],
    		//0表示男
    		//1表示女
    		//2表示保密
    		'rowset'   => [
    			['id'=>2,'username'=>'孙悟空','sex'=>0,'face'=>'1.jpg'],
    			['id'=>3,'username'=>'猪八戒','sex'=>0,'face'=>'5.jpg'],
    			['id'=>8,'username'=>'女儿国国王','sex'=>1,'face'=>'3.jpg'],
    			['id'=>11,'username'=>'九头虫','sex'=>2,'face'=>'18.jpg'],
    			['id'=>17,'username'=>'白骨精','sex'=>1,'face'=>'11.jpg'],
    			['id'=>35,'username'=>'观音','sex'=>1,'face'=>'38.jpg'],
    		],
    		'str' => "A>B,B<A,Tom&John,He said:\"I'm ok\"",
    		'message' => '<p>我是从数据表来的记录</p><p>我们是两个段落</p>',
    	];    	
        return view('view.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('view.create')->with('title','国家领导人名单')
                                  ->with('array',['毛泽东','邓小平','江泽民','习近平']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('view.show')->withTitle('中国的国有银行有')
                                ->withBanks(['中国工商银行','中国建设银行','中国农业银行','中国银行']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
