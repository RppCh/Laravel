<?php
namespace App\Http\Controllers\Admin;
use App\Type;
use Illuminate\Http\Request;
class TypeController extends BaseController{
	function add(){
		$type=new Type();
		//传一级分类给模板,获取第一级分类 fid=0
		$typeOneCols=$type->select('id','tname')
						  ->where("fid",0)
						  ->get();
		
		return view('admin.type.add',['typeOneCols'=>$typeOneCols]);
	}
	function save(Request $request){
		//接收数据,并把数据写表 type
		$arr=$request->all();
		unset($arr['_token']);
		$tname=$request->get('tname');
		$fid=$request->get('fid');
		$type=new Type();
		/*$type->tname=$tname;
		$type->fid=$fid;
		$re=$type->save();
		*/
		$re=$type->insertGetId($arr);
		
		if($re){
			return redirect("admin/type/oper")->with('message','添加成功');
		}else{
			return redirect()->back()->with('message','添加失败');
		}
		
	}
	function oper(){
		$type=new Type();
		$arr=[];
		$cols=$type->where("fid",0)->get();
		foreach($cols as $ob){
			//找子,拼子分类
			$fid=$ob->id;
			$colSon=$type->where("fid",$fid)->get();
			$sonArr=[];
			foreach($colSon as $sob){
				$sonArr[]=['id'=>$sob->id,'tname'=>$sob->tname,'fid'=>$sob->fid];
			}
			$arr[]=['id'=>$ob->id,'tname'=>$ob->tname,'fid'=>$ob->fid,'son'=>$sonArr];
		}
		
		return view("admin.type.oper",['arr'=>$arr]);
	}
	/**
	 * 呈现修改的表单页面
	 */
	function update($id){
		$type=new Type();
		//传一级分类给模板,获取第一级分类 fid=0
		$typeOneCols=$type->select('id','tname')
		->where("fid",0)
		->get();
		
		$type=\App\Type::find($id);
		return view('admin.type.update',['type'=>$type,'typeOneCols'=>$typeOneCols]);
	}
	/**
	 * 负责处理表单update的数据
	 */
	function usave(Request $request){
		$tname=$request->get('tname');
		$id=$request->get('id');
		$type=\App\Type::find($id);
		$type->tname=$tname;
		$re=$type->save();
		if($re){
			return redirect("admin/type/oper")->with('message','修改成功');
		}else{
			return redirect("admin/type/oper")->with('message','修改失败');
		}
	}
	/**
	 * 根据id,删除分类数据
	 */
	function del($id){
		$type=new Type();
		//判断此$id对应的记录,有没有子分类
		$num=$type->where("fid",$id)->count();
		if($num==0){
			$type->where("id",$id)->delete();
			return redirect("admin/type/oper")->with('message','操作成功');
		}else{
			return redirect("admin/type/oper")->with('message','请删除此分类下的子分类.');
		}
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
}