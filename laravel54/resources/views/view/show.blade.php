<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Document</title>
</head>
<body>
	<h1>{{$title}}</h1>
	<blockquote>
		@foreach($banks as $bank)
		<p>{{$bank}}</p>
		@endforeach
	<blockquote>	
</body>
</html>