<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Type extends Model{
	protected $table="type";
	protected $primaryKey='id';
	public $timestamps=false;
	function showOption(){
		/*
		<optgroup label="国内">
			<option value="1-3">港澳台</option>
			<option value="1-5">内地</option>
		</optgroup>
		<optgroup label="国际">
			<option value="2-7">欧盟</option>		
		</optgroup>
		 */
		$str="";
		//找第一级分类
		$cols=$this->where("fid",0)->get();
		foreach($cols as $ob){
			$id=$ob->id;
			$tname=$ob->tname;
			$str.="<optgroup label=\"{$tname}\">";
			//找子分类 type表
			$sonCols=$this->where("fid",$id)->get();
			foreach($sonCols as $son){
				$str.="<option value=\"{$id}-{$son->id}\">{$son->tname}</option>";
			}
			$str.="</optgroup>";
		}
		
		return $str;
		
		
		
		
		
		
		
		
		
	}
}