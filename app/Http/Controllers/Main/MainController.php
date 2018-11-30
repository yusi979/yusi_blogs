<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller{
    // 首页(中间)
    public function index(){
        return view('main.index');
    }
    // 首页(顶部)
    public function main(){
        return view('main.main');
    }
    // 首页(左侧)
    public function nav(){
        return view('main.nav');
    }
    // 表单
    public function form(){
        return view('main.form');
    }
    // 表格
    public function table(){
        return view('main.table');
    }
}
