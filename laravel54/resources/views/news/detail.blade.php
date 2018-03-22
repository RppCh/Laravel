<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
@include("public.header")
<hr/>
<h1>标题</h1>
<div>内容</div>
<form action="http://localhost/psd17082/19_laravel/public/comment/save" method="post">
{{ csrf_field() }}
内容:<textarea rows="5" cols="30" name='content'></textarea><br/>
<input type="submit" value="提交"/>
</form>
</body>
</html>