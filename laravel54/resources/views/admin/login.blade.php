<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h1>登录</h1>
<form action="{{url('admin/check')}}" method="post">
{{csrf_field()}}
用户名:<input type="text" name="username" /><br/>
密码:<input type="password" name="password"/><br/>
<input type="submit" value="提交"/>
</form>
</body>
</html>