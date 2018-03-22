@extends('layouts.admin')
@section('main')
<h1>管理分类</h1>
			<hr/>
			<table width="99%" align="center">
				<tr>
					<th>id</th>
					<th>tname</th>
					<th>父分类</th>
					<th>管理</th>
				</tr>
				@foreach($arr as $v)
				<tr>
					<td>{{$v['id']}}</td>
					<td>{{$v['tname']}}</td>
					<td>{{$v['fid']}}</td>
					<td><a href="{{url('admin/type/update',['id'=>$v['id']])}}">编辑</a>&nbsp;|&nbsp;<a href="{{url('admin/type/del',['id'=>$v['id']])}}">删除</a></td>
				</tr>
				@foreach($v['son'] as $sv)
				<tr>
					<td>{{$sv['id']}}</td>
					<td>--{{$sv['tname']}}</td>
					<td>{{$sv['fid']}}</td>
					<td><a href="{{url('admin/type/update',['id'=>$sv['id']])}}">编辑</a>&nbsp;|&nbsp;<a href="{{url('admin/type/del',['id'=>$sv['id']])}}">删除</a></td>
				</tr>
				@endforeach
				@endforeach
			</table>
@endsection		