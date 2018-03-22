<div class="nav">
@foreach($headerNarArr as $v)
<a href="{{url('nlister',['tid'=>$v['id']])}}">{{$v['tname']}}</a>
&nbsp;|&nbsp;
@endforeach
</div>