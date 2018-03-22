<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Type;
use App\News;
use Illuminate\Support\Facades\DB;
class NewsController extends BaseController{
	/**
	 * 展现文章表单页面
	 * @return Ambigous <\think\response\View, \Illuminate\View\View, \Illuminate\Contracts\View\Factory, unknown, \think\response\$this, \think\response\View>
	 */
	function add(){
		$type=new Type();
		$str=$type->showOption();
		return view('admin.news.add',['str'=>$str]);
	}
	/**
	 * 把表单数据写入数据库表
	 */
	function save(Request $request){
		//执行验证规则
		$this->validate($request,[
				'title'=>'required|regex:/^.{5,100}$/|unique:news',
				'content'=>'required',
				],[
   				'title.required' => '哥,请填写标题',
				'title.regex'=>'标题长度在5到100个字符',
				'title.unique'=>'标题已经存在',
   				'content.required'  => '大爷的,内容必须填写',
				]);
		
		//保存图片
		$ob=$request->file('upload');
		$path="default.png";
		if($ob){
			$path=$ob->store('a','uploads');
		}
		
		//接收数据 $_POST $request->get('名') $request->all();
		$title=$request->get('title');
		$content=$request->get('content');
		$typestr=$request->get('typestr');
		$typeArr=explode("-",$typestr);
		$typefid=$typeArr[0];
		$typeid=$typeArr[1];
		
		$news=new News();
		$news->title=$title;
		$news->content=$content;
		$news->typefid=$typefid;
		$news->typeid=$typeid;
		$news->addtime=time();
		$news->imagepath=$path;
		$re=$news->save();
		if($re){
			return redirect("admin/news/oper")->with('message','添加成功');
		}else{
			return redirect()->back()->with('message',"添加失败");
		}
		
	}
	function oper(Request $request){
		$ob=new News();
		$title=$request->get('title');
		$typefid=$request->get('typefid');
		if($title){
			$ob=$ob->where('title','like',"%{$title}%");
		}
		if($typefid){
			$ob=$ob->where('typefid',$typefid);
		}
		//呈现文章管理列表 调用M实现数据库表操作,查询
		
		$cols=$ob->orderBy("id",'desc')
				 
				 ->paginate(3);
		$type=new Type();
		$typeCols=$type->where('fid',0)->get();
		return view("admin.news.oper",['cols'=>$cols,'typeCols'=>$typeCols]);
	}
	
	function oper1(){
		//获取所有数据,显示在模板上.
		$news=new News();
		$cols=$news->select("news.*",'t1.tname as tname1',"t2.tname as tname2")
		->join("type as t1","news.typefid",'=','t1.id')
		->join("type as t2",'news.typeid','=','t2.id')
		->get();
		return view('admin.news.oper1',['cols'=>$cols]);
	}
	function tongji(){
		//获取数据
		$news=new News();
		$cols=$news->select(DB::raw("count(*) as num"),"type.tname")
			 ->join('type','news.typefid','=','type.id')
			 ->groupBy('type.tname')
			 ->get();
		return view('admin.news.tongji',['cols'=>$cols]);
	}
	
	
}
