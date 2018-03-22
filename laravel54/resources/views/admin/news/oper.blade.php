@extends('layouts.admin')
@section('main')
			<h1>管理文章</h1>
			<hr/>
			<form action="{{url('admin/news/oper')}}" method="get">
			搜索:&nbsp;标题:<input value="{{request()->get('title')}}" type="text" name='title'/>&nbsp;
			<select name="typefid">
				<option value='' selected="selected">请选择</option>
				@foreach($typeCols as $ob)
				<option @if(request()->get('typefid')==$ob->id)selected='selected'@endif value="{{$ob->id}}">{{$ob->tname}}</option>
				@endforeach
			</select>
			&nbsp;<input type="submit" value="搜索"/>
			</form>
			<hr/>
			<table width="99%" align="center">
				<tr>
					<th>id</th>
					<th>title</th>
					<th>addtime</th>
					<th>分类</th>
					<th>管理</th>
				</tr>
				@foreach($cols as $ob)
				<tr>
					<td>{{$ob->id}}</td>
					<td>{{$ob->title}}</td>
					<td>{{date('Y-m-d H:i:s',$ob->addtime)}}</td>
					<td>{{$ob->getTypeNameById($ob->typefid)}}&gt;{{$ob->getTypeNameById($ob->typeid)}}</td>
					<td><a href="{{url('admin/news/update',['id'=>$ob->id])}}">编辑</a>&nbsp;|&nbsp;<a href="{{url('admin/news/del',['id'=>$ob->id])}}">删除</a></td>
				</tr>
				@endforeach
			</table>
			{{$cols->appends(request()->all())->render()}}
@endsection
