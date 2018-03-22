@extends('layouts.admin')
@section('main')
			<h1>管理文章</h1>
			<hr/>
			
			<table width="99%" align="center">
				<tr>
					<th>id</th>
					<th>title</th>
					<th>addtime</th>
					<th>分类</th>
					
				</tr>
				@foreach($cols as $ob)
				<tr>
					<td>{{$ob->id}}</td>
					<td>{{$ob->title}}</td>
					<td>{{date('Y-m-d H:i:s',$ob->addtime)}}</td>
					<td>{{$ob->tname1}}&gt;{{$ob->tname2}}</td>
				</tr>
				@endforeach
			</table>
@endsection
