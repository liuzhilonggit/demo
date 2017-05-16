<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户的添加页面</title>
</head>
<body>
	<form action="/test/insert" method="post">
	  用户：<input type="text" name="username" value="{{old('username')}}"><br/>
		密码：<input type="password" name="password" value="{{old('password')}}"><br/>
		昵称：<input type="text" name="nickname" value="{{old('nickname')}}"><br/>
		简介：<input type="text" name="jianjie" value="{{old('jianjie')}}"><br/>
			{{csrf_field()}}
		<input type="submit" value="提交"><br/>
	</form>
	
</body>
</html>