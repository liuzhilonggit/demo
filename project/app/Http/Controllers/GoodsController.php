<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    /**
     * 商品首页
     */
    public function getIndex(){
        return view('user');
    }

    /**
     * 商品添加页
     */
    public function getAdd(){
        return view('form');
    }
}
