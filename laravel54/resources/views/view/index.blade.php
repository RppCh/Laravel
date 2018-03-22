<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Document</title>
	<style>
		table{
			border-collapse: collapse;
			border-spacing: 0;			
			width: 100%;
		}
		td{
			padding: 10px;
			border: 1px solid #f00;			
		}
	</style>
</head>
<body>
	<h1 align="center">Blade模板</h1>
	<hr />
	<p align="center"><a href="{{asset('view/create')}}">调用create()方法</a></p>
	<p align="center"><a href="{{asset('view/show/5')}}">show()方法</a></p>
	<hr />
	<blockquote>
		<h2>转义字符(查看一下HTML源代码)</h2>
		{{$str}}
	</blockquote>
	<hr />
	<blockquote>
		<h2>未转义数据</h2>
		<p>{!!$message!!}</p>
	</blockquote>
	<hr />
	<blockquote>
		<h2>标量类型</h2>	
		<p>{{$username}}</p>
		<p>{{$age}}</p>
		<p>{{$sex ? '男' : '女'}}</p>
		<p>{{date('Y年m月d日H:i:s',$regdate)}}</p>	
	</blockquote>
	<hr />
	<blockquote>
		<h2>索引数组</h2>
		@foreach($users as $key => $value)
		<p>{{$key}}--{{$value}}</p>		
		@endforeach
	</blockquote>
	<hr />
	<blockquote>
		<h2>关联数组</h2>
		@foreach($userInfo as $key => $value)
		<p>{{$key}}--{{$value}}</p>		
		@endforeach
	</blockquote>
	<hr />
	<blockquote>
		<h2>二维数组</h2>
		<table>
			
			@forelse($rowset as $key => $row)
			@if($loop->first)
			<tr>
				<td>编号</td>
				<td>头像</td>
				<td>序号</td>
				<td>姓名</td>
				<td>性别</td>
			</tr>
			@endif
			<tr>
				<td>{{$loop->iteration}}</td>
				<td><img src="{{asset('images/' . $row['face'])}}" alt="" style="border-radius: 50%;"></td>
				<td>{{$row['id']}}</td>
				<td>{{$row['username']}}</td>
				<td>
					@if($row['sex'] == 0)
					男
					@elseif($row['sex'] == 1)
					女
					@elseif($row['sex'] == 2)
					保密
					@endif
				</td>
			</tr>
			@if($loop->last)
			<tr>
				<td colspan="5">共有{{$loop->count}}条记录</td>				
			</tr>
			@endif
			@empty
			<tr>
				<td>对不起,不存在相关的记录</td>
			</tr>
			@endforelse			
		</table>
	</blockquote>
</body>
</html>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>









