@extends('layouts.admin')
@section('main')
			<h1>统计文章</h1>
			<hr/>
			
			<table width="99%" align="center">
				<tr>
					<th>文章条数</th>
					<th>分类名称</th>
					
				</tr>
				@foreach($cols as $ob)
				<tr>
					<td>{{$ob->num}}</td>
					<td>{{$ob->tname}}</td>
				</tr>
				@endforeach
			</table>
@endsection
