<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ZsgcController extends Controller{
    // 查询展示
    public function select(){
        $user = new User();
        $result = $user->select();
        return view('zsgc.select',['data'=>$result]);
    }
    // 添加页面
    public function add(){
        return view("zsgc.add");
    }
    // 添加方法
    public function execAdd(){
        $data = Input::all();
//        $res = DB::table('user')->insert(['name'=>$data['name'],'pwd'=>$data['pwd']]);// 查询构建器
//        var_dump($res);die;
        $user = new User();
        $res = $user->execAdd($data);
        if($res){
            echo "成功";
        }else{
            echo "失败";
        }
    }
    // 删除
    public function delete(){
        $id = Input::get('id');
        $num = DB::table('user')->where('id',$id)->delete();
        if($num){
            echo "删除成功";
        }else{
            echo "删除失败";
        }
    }
    // 修改页面
    public function upShow(){
        $id = Input::get('id');
        $data = DB::table('user')->where('id',$id)->select('id','name','pwd')->get();
        return view('zsgc/upShow',['data'=>$data[0]]);
    }
    // 执行修改
    public function update(){
        $data = Input::all();
        $num = DB::table('user')->where('id',$data['id'])->update(['name'=>$data['name'],'pwd'=>$data['pwd']]);
        if($num){
            echo "修改成功";
        }else{
            echo "未修改";
        }
    }
}
