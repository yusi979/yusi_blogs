<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'App\\Modules\Admin\Http\Controllers'], function()
{
    Route::get('/', 'AdminController@index');
    Route::get('login', 'LoginController@index');
    Route::get('index','MainController@index'); // 首页(中间)
    Route::get('main','MainController@main'); // 首页(顶部)
    Route::get('nav','MainController@nav'); // 首页(左侧)
    Route::get('table','MainController@table'); // 表格
    Route::get('form','MainController@form'); // 表单




    Route::get('login','Login\LoginController@index');                               // 登录页展示
    Route::post('student_login','Login\LoginController@student_login');           // 学生登录
    Route::post('teacher_login','Login\LoginController@teacher_login');           // 导师登录
    Route::post('institution_login','Login\LoginController@institution_login');  // 机构登录

    Route::get('captcha/{tmp}','Code\CodeController@captcha'); // 验证码
});
