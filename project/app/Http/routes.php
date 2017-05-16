<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
    //echo date('Y-m-d H:i:s');
});*/

Route::get('/', function(){
	return view('welcome');
});
/*Route::get('/test', function (){
	echo \App\Http\Middleware\LoginMiddleware::class;
});

*/
/*Route::get('/goods/{id}',function($id){
	echo 'woaiwojia';
	echo "<br/>";
	echo $id;
})->where('id','\d+');*/

/*Route::get('/goods/{id}', function($id){
	echo $id;
})->where('id','\d+');*/

/*Route::get('/goods/list/{name}-{id}', function($id){
	echo 'you can help me?';
})->where('id','[0-5]{2}')->where('name','[a-z,A-Z]+');*/

/*Route::get('/goods/list/{name}-{id}', function($id){
	echo 'wo are famlty';
})->where('id','\d+')->where('name','[a-z,A,Z]+');

Route::get('/ajax', function(){
	return view('ajax');
});

Route::post('/post', function(){
	echo '这是一个ajax发送过来的post请求';
});*/

Route::get('/zhuce', function(){
	return view('zhuce');
});




Route::group(['middleware'=>'zhuce'], function(){
	Route::controller('/admin/user', 'UserController');

	Route::controller('admin/goods', "GoodsController");
});


//中间件
Route::get('/login', function(){
	echo '这是我的登录页面';
});
/*
Route::group(['middleware' => 'login'], function(){
	Route::get('/admin', function(){
		echo '这里是后台首页';
	});

	Route::get('/admin/user', function(){
		echo '这里是后台的用户管理页面';
	});
});*/

/*Route::get('/admin',function(){
	return view('form');
})->middleware('login');*/

/*Route::get('/admin', function(){
	echo '11111';
})->middleware('login');*/


/*Route::get('/admin', function(){
	return view('form');
})->middleware('login');*/

/*Route::get('/admi',[
		'middleeare' => 'login',
		'uses' => function(){
			echo '这是我们的中间件页面';
		}      

	]);*/



//文件上传操作
/*Route::get('/upload', function(){
	return view('upload');
});*/

Route::get('/upload', function(){
	return view('upload');
});

//Route::post('/upload', 'TestController@upload');

Route::post('/upload', 'TestController@upload');

//写入cookie
/*Route::get('/writeCookie', function(){
	\Cookie::queue('use', 'adn', 20);
	//return response('')->withCookie('uid', 100, 20);
});*/

/*Route::get('/writeCookie', function(){
	\Cookie::queue('liu', 'admin', 10);
});*/

/*Route::get('/getCookie', function(){
	$liu = \Cookie::get('liu');
	echo $liu;
	$use= \Cookie::get('use');
     echo $use;
});*/

//读取Cookie
/*Route::get('/getCookie', function(){
	$uid =\Cookie::get('uid');
	echo $uid;
});*/

//在控制器中读取Cookie
//Route::get('/getCookie', 'TestController@cookie');

//响应
Route::get('/response', function(){
	//返回json字符串  //jquery里解析json字符串，变成一个js对象  $.parseJSON(data);   
	//return response()->json(['username'=>'admin','password'=>'admin']);
	//下载文件
	//return response()->download('./uploads/jjj.jpg');
});

//模板加载
Route::get('/view', 'TestController@view');
Route::get('/ceshi', 'TestController@ceshi');
//数据库的操作
Route::get('/db', 'TestController@db');

//构造器的访问
Route::get('/burder', 'TestController@burder');


Route::controller('/test', 'TestController');
//Route::controller('/user', 'UserController');

Route::controller('/post', 'PostController');

//Route::get('/user', 'UserController@index');
//Route::get('/user/create', 'UserController@create');
//Route::get('/home/user/insert', 'Home\UserController@insert');

// Route::controller('/user', 'UserController');
//Route::controller('/user/create', 'UserController');

 //Route::controller('/home/user', "Home\UserController");
//Route::controller('/home/user/insert', 'Home\UserController');

//Route::Controller('/home/user/add', "Home\UserController");

//Route::get('/home/user/insert', 'Home\UserController@insert');
//Route::get('/home/login/register','LoginController@register');

//Route::get('/home/user/show', 'UserController@show');



//Route::get('user/add', 'UserController@add');


//Route::get('home/user/show', "Home\UserController@show");
//Route::post('user/insert' ,'UserController@insert');


//Route::controller('/user', 'UserController');
//Route::controller('/home/user', "Home\UserController");


