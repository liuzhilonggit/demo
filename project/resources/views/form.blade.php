<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="insert" method="post">
		<input type="text" name="user"/>
		<br/>
		<input type="password" name="pass"/>
		{{csrf_field()}}
		<input type="submit" value="提交"/>

	</form>
</body>
</html>