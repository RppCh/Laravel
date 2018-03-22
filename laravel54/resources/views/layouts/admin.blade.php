
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style type="text/css">
*{padding:0;margin:0}
.header{
	height:80px;
	line-height:80px;
	background:#abcdef;
}
.header h1{
	line-height:80px;
}
.content{
	margin-top:8px;
}
.content .menu{
	width:15%;
	float:left;
	background:#abcdef;
}
.content .menu div{
	padding-left:8px;
}
.content .main{
	width:85%;
	float:right;
}
.content .main div{
	margin-left:8px;
	background:#f2f2f2;
	padding-left:8px;
}
.message{
	border:1px solid orange;
	background:red;
	padding:5px;
}
</style>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript">
function setHeight(){
	var winH=$(window).height();
	$(".menu").css('height',winH-88+'px');
	$(".main>div").css('height',winH-88+'px');
}
var num=3;
function changeNum(){
	num--;
	if(num==0){
		$(".message").hide(5000);
	}else{
		$("#s").html(num);
		setTimeout(changeNum,1000);
	}
}
$(function(){
	setHeight();
	$(window).resize(setHeight);
	setTimeout(changeNum,1000);
})
</script>
</head>
<body>
<div class="header">
	<h1>psd1708后台管理系统</h1>
</div>
<div class="content">
	<div class="menu">
		<div>
			<h3>分类admin</h3>
			<a href="{{url('admin/type/add')}}">添加</a>
			<a href="{{url('admin/type/oper')}}">列表</a>
			<h3>文章admin</h3>
			<a href="{{url('admin/news/add')}}">添加</a>
			<a href="{{url('admin/news/oper')}}">列表</a>
			<a href="{{url('admin/news/oper1')}}">列表join</a>
			<a href="{{url('admin/news/tongji')}}">统计</a>
			<h3><a href="{{url('admin/logout')}}">退出</a></h3>
		</div>
	</div>
	<div class="main">
		<div>
			@if(session()->has('message'))
			<div style="height:8px;"></div>
			<div class="message" style="background:#fedcba;margin:0px 8px 0 0;">
			{{ session()->get('message') }}<span id='s'>3</span>
			</div>
			@endif
			@yield('main')
		</div>
	</div>
</div>
</body>
</html>