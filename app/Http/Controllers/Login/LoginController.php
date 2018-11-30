<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Model\User;
use App\Http\Controllers\Code\CodeController;

class LoginController extends Controller{
    // 登录页面展示
    public function index(){
//        $code = new CodeController();
//        $a = $code->captcha(1);
//        var_dump($a);die;
        return view('login.login');
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
