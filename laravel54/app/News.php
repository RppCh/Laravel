<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class News extends Model{
	protected $table="news";
	protected $primaryKey='id';
	public $timestamps=false;
	function getTypeNameById($id){
		$type=new Type();
		$type=$type->where("id",$id)->first();
		return $type->tname;
	}
}