@extends('layouts.admin')
@section('main')
			<h1>修改分类</h1>
			<hr/>
			<form action="{{url('admin/type/usave')}}" method="post">
			{{csrf_field()}}
			名称:<input value="{{$type->tname}}" type="text" name="tname" /><br/>
			父分类:<select name='fid'>
				<option value="0">顶级</option>
				@foreach($typeOneCols as $ob)
				<option @if($ob->id == $type->fid)selected='selected'@endif value="{{$ob->id}}">{{$ob->tname}}</option>
				@endforeach
			</select><br/>
			<input type="hidden" value="{{$type->id}}" name="id"/>
			<input type="submit" value="提交"/>
			</form>
@endsection		