<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<style type="text/css">
		#header{
			height:100px;
			width:100%;
			background:blue;
		}
		#section{
			height:600px;
			width:100%;
			background:yellow;
		}
		#footer{
			height:100px;
			width:100%;
			background:pink;
		}
	</style>
</head>
<body>
	@section('head')
	<div id="header"></div>
	@show
	@section('cont')
	<div id="section"></div>
	@show
	<div id="footer"></div>
	@section('js')

	@show
</body>
</html>
