<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ajax的发送</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<button>点击发送post请求</button>
	<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});
	$('button').click(function(){
		$.post('/post', {}, function(data){
			alert(data)
		});
	});
	</script>
</body>
</html>