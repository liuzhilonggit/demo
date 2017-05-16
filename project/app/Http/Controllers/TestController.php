<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{   
    public function getIndex()
    {
        echo "11111111";
    }
    //请求的相关操作
    public function getRequest(Request $request)
    {
        //普通获取
        //获取请求路径
       // $path = $request->path();
       /* $path = $request->path();
        $isU = $request->id('test/*');
        $url = $request->url();*/
       /* $method = $request->isMethod('post');
        dd($method);
       // var_dump($path);die;
        //检测是否为某个字符串开始的请求
       // $isU = $request->is('tet/*');
       // dd($isU);
        //获取完整的URL
        $url = $request->url();
        //获取请求方式
       // dd($url);
        $method = $request->method();
        //检测是否获取的什么方法
        $isPost = $request->isMethod('post');*/
        //var_dump($isPost);


        //带参数的获取
        //提取参数
         //$id = $request->input('id');
         //$id=$request->id;
       /* $id = \Input::get('id');
        dd($id);
*/

        //设置默认值
        $isVip = $request->input('isVip', 'no');

        //检测是否将某个参数传递过来
        $res = $request->has('id');
       // dd($res);
        //后去所有的请求方法
        $all = $request->all();
       // dd($all);
        //提取部分值
        $bufen = $request->only(['id','username']);
        $input = $request->except(['id']);
        //dd($input);

        

    }
    //显示用户的添加页面
    //闪存的实现
    public function getUserAdd()
    {
        return view('user');
    }
    //下面就要用到闪存  如果没有添加用户数据，返回原页面，
    //这是我们的原页面其他数据也没了，这时就要用到闪存了
    public function postInsert(Request $request)
    {
        $request->flash();
        return redirect('/test/user-add')->withInput($request->except('nickname'));
        /*if(!$request->has('username')){
            return back();
        }*/
        dd($request->all());
    }
    //文件上传的操作
    public function upload(Request $request)
    {
        //dd($request->File('file'));
        

        

        if($request->hasFile('file')){
            //声明文件名称
            $name = md5(time()+rand(1,9999999));
           // var_dump($name); 
            //laravel中获取图片后缀名的系统函数
            $houzui = $request->file('file')->getClientOriginalExtension();
            //var_dump($houzui);die;
            //拼接文件
            $request->file('file')->move('./uploads', $name.'.'.$houzui);
            ?>
                <script>
                    alert('下载完毕！');
                </script>
            <?php

        };
    }


    //读取Cookie的操作
    public function cookie(Request $request){
        //第一种获取方式
        //$uid = \Cookie::get('uid');
        //echo $uid;
        //第二种获取方式
       // $username = $request->cookie('username');
       // dd($username);
        $username= \Cookie::get('username');
        echo $username;
    }

    //模板的加载方法
    public function view(){
        return view('list',[
            'title'=>'网站登录页面',
            'love'=>'iloveyou',
            'usernam'=>'admin',
            'undestant'=>'<span style="color:green">恭喜OMG获得冠军</span>'
            ]);
    }

    //模板页2
    public function ceshi(){

        $arr=array('张三','李四','冯五','赵六','田七','王八','龙九');
        $res = DB::select('select * from stu where id=?',[3]);
        return view('ceshi',[
                'total'=>10,
                /*'like'=>[
                    '篮球',
                    '足球',
                    '乒乓球',
                    '羽毛球'
                ]*/
                'array'=>$arr,
                'aaa'=>$res[0]

                
            ]);
    }

    /**
     * 数据库的操作
     */
    public function db(){
        //数据查询  预处理
        //$res = DB::select('select * from stu where id=?',[3]);
        //数据插入  预处理
       // $res = DB::insert('insert into stu(name,sex,age,phone,address,tall,team) values(?,?,?,?,?,?,?)',['张三','m',22,13923456786,'上西市',180,'后舰队']);
        //更新操作  预处理
        //$res = DB::update('update stu set name =? where id=?',['赵六',3]);
        //删除操作
        //$res = DB::delete('delete from stu where id=?',[58]);
        //查看表的创建语句
       // $res = DB::select('show create table user');
        //$res = DB::insert('insert into user(username,password,state,money) values(?,?,?,?)',['张三','lzm2354606',2,1000000]);
        //dd($res);
        //事物操作
        /*DB::beginTransaction();
        DB::update('update user set money = money - 1000 where id=?',[1]);
        DB::update('update user set money = money + 1000 where id=?',[4]);
        DB::commit();*/

        //自动事物
        /*DB::transaction(function(){
            DB::update('update user set money = money - 1000 where id=?',[1]);
            DB::update('update user set money = money + 1000 where id=?',[400]);
        });*/

        }

    /**
     * 构造器（连贯操作）
     */
    public function burder(){
        //查询所有数据
        //$res = DB::table('user')->get();
       // $res = DB::table('user')->get();
        //插入数据
        /*$res = DB::table('user')->insert([
                'username'=>'admin',
                'password'=>'123'
            ]);*/

        //$res = DB::table('user')->insert([
                //'username'=>'admin',
               // 'password'=>'123'
           // ]);

       //$res = DB::table('user')->insert([
              //  ['user'=>'admin','password'=>'123'],
              //  ['user'=>'adm','password'=>'111'],
          //  ]);
        //插入多条
        /*$res = DB::table('user')->insert([
                ['username'=>'ddd','password'=>'ssss'],
                ['username'=>'aaa','password'=>'gggg'],

            ]);*/
        //插入数据并且获取插入数据的id
        /*$res = DB::table('user')->insertGetId([
                'username'=>'bbbbbbbb',
                'password'=>'vvvvvvvv',
            ]);*/

    //$res = DB::table('user')->insertGetId([

        //]);

        //更新操作
       /* $res = DB::table('user')
            ->where('id','>',15)
            ->update([
                'username'=>'mmmmmmmmm'
            ]);*/

       /* $res = DB::table('user')
            ->where('id',10)
            ->update([
                'username'=>'mmmmmmmmmm'
            ]);*/

        //删除操作
        //$res = DB::table('user')->where('id',20)->delete();

            //$res = DB::table('user')->where('id',18)->delete();
           // $res = DB::table('user')->lists('id');
        //查询指定结果集中的某一列
        ////$res = DB::table('user')->lists('id');
       // dd($res);

        test();
    }











}
