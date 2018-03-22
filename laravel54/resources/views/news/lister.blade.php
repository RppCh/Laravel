<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
@include('public.header')
<hr/>
<ul>
	@foreach($arr as $v)
	<li><a href="{{url('news/detail',['id'=>$v['id']])}}">{{$v['title']}}</a>--{{$v['pubtime']}}</li>
	@endforeach
</ul>









</body>
</html>