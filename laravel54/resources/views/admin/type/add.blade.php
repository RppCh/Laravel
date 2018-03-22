@extends('layouts.admin')
@section('main')
			<h1>添加分类</h1>
			<hr/>
			<form action="{{url('admin/type/save')}}" method="post">
			{{csrf_field()}}
			名称:<input type="text" name="tname" /><br/>
			父分类:<select name='fid'>
				<option value="0">顶级</option>
				@foreach($typeOneCols as $ob){
				<option value="{{$ob->id}}">{{$ob->tname}}</option>
				@endforeach
			</select><br/>
			<input type="submit" value="提交"/>
			</form>
@endsection		