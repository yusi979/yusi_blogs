<?php
/**
 * Created by PhpStorm.
 * User: 雨思呗
 * Date: 2018/11/30
 * Time: 14:10
 */

namespace App\Modules\Admin\Http\Controllers;
use App\Http\Controllers\Controller;

class MainController extends Controller{
    // 首页(中间)
    public function index(){
        return view('admin::main.index');
    }
    // 首页(顶部)
    public function main(){
        return view('admin::main.main');
    }
    // 首页(左侧)
    public function nav(){
        return view('admin::main.nav');
    }
    // 表单
    public function form(){
        return view('admin::main.form');
    }
    // 表格
    public function table(){
        return view('admin::main.table');
    }
}