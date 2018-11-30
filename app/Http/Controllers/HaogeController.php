<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class HaogeController extends Controller{
     // 添加页面展示
    public function select(){
        return view('haoge.add');
    }
    // 执行添加
    public function haogeAdd(){
        $data = Input::all();
        $bool = DB::table('haoge')->insert(['name'=>$data['name'],'pwd'=>$data['pwd']]);
     var_dump($bool);
    }
}
