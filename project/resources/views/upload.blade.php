<!-- <!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件上传表单</title>
</head>
<body>
	<form action="/upload" method="post" enctype="multipart/form-data">
		<input type="file" name="file"><br/>
		{{csrf_field()}}
		<input type="submit" value="点击上传">
	</form>
</body>
</html> -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件上传表单</title>
</head>
<body>
	<form action="/upload" method="post" enctype="multipart/form-data">
		<input type="file" name="file"><br/>
		{{csrf_field()}}
		<input type="submit" value="点击上传">
	</form>
</body>
</html>