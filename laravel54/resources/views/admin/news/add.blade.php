@extends('layouts.admin')
@section('main')
			<h1>添加文章</h1>
			<hr/>
			<form enctype='multipart/form-data' action="{{url('admin/news/save')}}" method="post">
			{{csrf_field()}}
			标题:<input type="text" value="{{old('title')}}" name="title" />
			@foreach($errors->get('title') as $v)
			{{$v}}<br/>
			@endforeach<br/>
			图片:<input type="file" name='upload'/><br/>
			分类:<select name='typestr'>
				{!!$str!!}
			</select><br/>
			内容:<textarea name="content" rows="5" cols="35">{{request()->old('content')}}</textarea>{{$errors->first('content')}}<br/>
			<input type="submit" value="提交"/>
			</form>
@endsection	