<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminController extends Controller{
    // 登录页面展示
    public function index(){
        return view('admin::admin.login');
    }
    // 学生登录
    public function student_login(){
        $data = Input::all();
        $user = new User();
        $res = $user->student_login($data);
        var_dump($res);
    }
    // 导师登录
    public function teacher_login(){
        $data = Input::all();
        var_dump($data);
    }
    // 机构登录
    public function institution_login(){
        $data = Input::all();
        var_dump($data);
    }
}
