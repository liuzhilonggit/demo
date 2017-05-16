@extends('layouts.index')

@section('title','列表页')

@section('head')
	<div id="header" style="background:green">
		<h3>爱我中华</h3>
	</div>
@endsection

@section('cont')
	<div id="section" style="background:red">我爱我家
	<h3>函数使用</h3>
		{{strtoupper($love)}}
	<h3>默认值</h3>
		{{$username or 'root'}}
	<h3>不转义显示</h3>
		{!! $undestant !!}
	</div>
@endsection

@section('js')
	<script type="text/javascript">
		alert('{{$title}}');
	</script>
@endsection