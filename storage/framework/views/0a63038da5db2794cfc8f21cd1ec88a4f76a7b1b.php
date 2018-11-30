<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>江西师范大学软件学院毕业设计选题管理系统用户登录</title>
    <link href="admin/css/login.css" rel="stylesheet" rev="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="admin/js/jQuery1.7.js"></script>
    <script type="text/javascript" src="admin/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="admin/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="admin/js/jquery.SuperSlide.js"></script>
    <script type="text/javascript" src="admin/js/Validform_v5.3.2_min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var $tab_li = $('#tab ul li');
            $tab_li.hover(function(){
                $(this).addClass('selected').siblings().removeClass('selected');
                var index = $tab_li.index(this);
                $('div.tab_box > div').eq(index).show().siblings().hide();
            });
        });
    </script>
    <script type="text/javascript">
        $(function(){
            /*学生登录信息验证*/
            $("#stu_username_hide").focus(function(){
                var username = $(this).val();
                if(username=='输入用户名'){
                    $(this).val('');
                }
            });
            $("#stu_username_hide").focusout(function(){
                var username = $(this).val();
                if(username==''){
                    $(this).val('输入用户名');
                }
            });
            $("#stu_password_hide").focus(function(){
                var username = $(this).val();
                if(username=='输入密码'){
                    $(this).val('');
                }
            });
            $("#stu_password_hide").focusout(function(){
                var username = $(this).val();
                if(username==''){
                    $(this).val('输入密码');
                }
            });
            $("#stu_code_hide").focus(function(){
                var username = $(this).val();
                if(username=='输入验证码'){
                    $(this).val('');
                }
            });
            $("#stu_code_hide").focusout(function(){
                var username = $(this).val();
                if(username==''){
                    $(this).val('输入验证码');
                }
            });
            // $(".stu_login_error").Validform({
            //     tiptype:function(msg,o,cssctl){
            //         var objtip=$(".stu_error_box");
            //         cssctl(objtip,o.type);
            //         objtip.text(msg);
            //     },
            //     ajaxPost:true
            // });
            /*导师登录信息验证*/
            $("#tea_username_hide").focus(function(){
                var username = $(this).val();
                if(username=='输入教工号'){
                    $(this).val('');
                }
            });
            $("#tea_username_hide").focusout(function(){
                var username = $(this).val();
                if(username==''){
                    $(this).val('输入教工号');
                }
            });
            $("#tea_password_hide").focus(function(){
                var username = $(this).val();
                if(username=='输入密码'){
                    $(this).val('');
                }
            });
            $("#tea_password_hide").focusout(function(){
                var username = $(this).val();
                if(username==''){
                    $(this).val('输入密码');
                }
            });
            $("#tea_code_hide").focus(function(){
                var username = $(this).val();
                if(username=='输入验证码'){
                    $(this).val('');
                }
            });
            $("#tea_code_hide").focusout(function(){
                var username = $(this).val();
                if(username==''){
                    $(this).val('输入验证码');
                }
            });
            // $(".tea_login_error").Validform({
            //     tiptype:function(msg,o,cssctl){
            //         var objtip=$(".tea_error_box");
            //         cssctl(objtip,o.type);
            //         objtip.text(msg);
            //     },
            //     ajaxPost:true
            // });
            /*教务登录信息验证*/
            $("#sec_username_hide").focus(function(){
                var username = $(this).val();
                if(username=='输入教务号'){
                    $(this).val('');
                }
            });
            $("#sec_username_hide").focusout(function(){
                var username = $(this).val();
                if(username==''){
                    $(this).val('输入教务号');
                }
            });
            $("#sec_password_hide").focus(function(){
                var username = $(this).val();
                if(username=='输入密码'){
                    $(this).val('');
                }
            });
            $("#sec_password_hide").focusout(function(){
                var username = $(this).val();
                if(username==''){
                    $(this).val('输入密码');
                }
            });
            $("#sec_code_hide").focus(function(){
                var username = $(this).val();
                if(username=='输入验证码'){
                    $(this).val('');
                }
            });
            $("#sec_code_hide").focusout(function(){
                var username = $(this).val();
                if(username==''){
                    $(this).val('输入验证码');
                }
            });
            // $(".sec_login_error").Validform({
            //     tiptype:function(msg,o,cssctl){
            //         var objtip=$(".sec_error_box");
            //         cssctl(objtip,o.type);
            //         objtip.text(msg);
            //     },
            //     ajaxPost:true
            // });
        });
    </script>
    <script type="text/javascript">
        $(function(){
            $(".screenbg ul li").each(function(){
                $(this).css("opacity","0");
            });
            $(".screenbg ul li:first").css("opacity","1");
            var index = 0;
            var t;
            var li = $(".screenbg ul li");
            var number = li.size();
            function change(index){
                li.css("visibility","visible");
                li.eq(index).siblings().animate({opacity:0},3000);
                li.eq(index).animate({opacity:1},3000);
            }
            function show(){
                index = index + 1;
                if(index<=number-1){
                    change(index);
                }else{
                    index = 0;
                    change(index);
                }
            }
            t = setInterval(show,8000);
            //根据窗口宽度生成图片宽度
            var width = $(window).width();
            $(".screenbg ul img").css("width",width+"px");
        });
    </script>
</head>

<body>
<div id="tab">
    <ul class="tab_menu">
        <li class="selected">学生登录</li>
        <li>导师登录</li>
        <li>机构登录</li>
    </ul>
    <div class="tab_box">
        <!-- 学生登录开始 -->
        <div>
            <div class="stu_error_box"></div>
            <form action="student_login" method="post" class="stu_login_error">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                <div id="username">
                    <label>用户名：</label>
                    <input type="text" id="stu_username_hide" name="name" value="输入用户名" nullmsg="用户名不能为空！" datatype="s2-3" errormsg="学号范围在6~18个字符之间！" sucmsg="用户名验证通过！"/>
                    <!--ajaxurl="demo/valid.jsp"-->
                </div>
                <div id="password">
                    <label>密&nbsp;&nbsp;&nbsp;码：</label>
                    <input type="password" id="stu_password_hide" name="pass" value="输入密码" nullmsg="密码不能为空！" datatype="*6-16" errormsg="密码范围在6~16位之间！" sucmsg="密码验证通过！"/>
                </div>
                <div id="code">
                    <label>验证码：</label>
                    <input type="text" id="stu_code_hide" name="code"  value="输入验证码" nullmsg="验证码不能为空！" datatype="*4-4" errormsg="验证码有4位数！" sucmsg="验证码验证通过！"/>

                    <img src="captcha/<?php echo e(}); ?>" alt="验证码" title="刷新图片" width="100" height="40" id="verify" border="0">
                    
                <div id="remember">
                    <input type="checkbox" name="remember">
                    <label>记住密码</label>
                </div>
                <div id="login">
                    <button type="submit">登录</button>
                </div>
            </form>
        </div>
        <!-- 学生登录结束-->
        <!-- 导师登录开始-->
        <div class="hide">
            <div class="tea_error_box"></div>
            <form action="teacher_login" method="post" class="tea_login_error">
                <div id="username">
                    <label>教员号：</label>
                    <input type="text" id="tea_username_hide" name="username" value="输入教员号" nullmsg="教员号不能为空！" datatype="s6-18" errormsg="教员号范围在6~18个字符之间！" sucmsg="教员号验证通过！"/>
                    <!--ajaxurl="demo/valid.jsp"-->
                </div>
                <div id="password">
                    <label>密&nbsp;&nbsp;&nbsp;码：</label>
                    <input type="password" id="tea_password_hide" name="password" value="输入密码" nullmsg="密码不能为空！" datatype="*6-16" errormsg="密码范围在6~16位之间！" sucmsg="密码验证通过！"/>
                </div>
                <div id="code">
                    <label>验证码：</label>
                    <input type="text" id="tea_code_hide" name="code"  value="输入验证码" nullmsg="验证码不能为空！" datatype="*4-4" errormsg="验证码有4位数！" sucmsg="验证码验证通过！"/>
                    <img src="admin/images//captcha.jpg" title="点击更换" alt="验证码占位图"/> </div>
                <div id="remember">
                    <input type="checkbox" name="remember">
                    <label>记住密码</label>
                </div>
                <div id="login">
                    <button type="submit">登录</button>
                </div>
            </form>
        </div>
        <!-- 导师登录结束-->
        <!-- 教务登录开始-->
        <div class="hide">
            <div class="sec_error_box"></div>
            <form action="institution_login" method="post" class="sec_login_error">
                <div id="username">
                    <label>机构号：</label>
                    <input type="text" id="sec_username_hide" name="username" value="输入机构号" nullmsg="机构号不能为空！" datatype="s6-18" errormsg="机构号范围在6~18个字符之间！" sucmsg="机构号验证通过！"/>
                    <!--ajaxurl="demo/valid.jsp"-->
                </div>
                <div id="password">
                    <label>密&nbsp;&nbsp;&nbsp;码：</label>
                    <input type="password" id="sec_password_hide" name="password" value="输入密码" nullmsg="密码不能为空！" datatype="*6-16" errormsg="密码范围在6~16位之间！" sucmsg="密码验证通过！"/>
                </div>
                <div id="code">
                    <label>验证码：</label>
                    <input type="text" id="sec_code_hide" name="code"  value="输入验证码" nullmsg="验证码不能为空！" datatype="*4-4" errormsg="验证码有4位数！" sucmsg="验证码验证通过！"/>
                    <img src="admin/images//captcha.jpg" title="点击更换" alt="验证码占位图"/> </div>
                <div id="remember">
                    <input type="checkbox" name="remember">
                    <label>记住密码</label>
                </div>
                <div id="login">
                    <button type="submit">登录</button>
                </div>
            </form>
        </div>
        <!-- 教务登录结束-->
    </div>
</div>
<div class="bottom">©2014 Leting <a href="javascript:;" target="_blank">关于</a> <span>京ICP证030173号</span>  More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a><img width="13" height="16" src="admin/images//copy_rignt_24.png" /></div>
<div class="screenbg">
    <ul>
        <li><a href="javascript:;"><img src="admin/images//0.jpg"></a></li>
        <li><a href="javascript:;"><img src="admin/images//1.jpg"></a></li>
        <li><a href="javascript:;"><img src="admin/images//2.jpg"></a></li>
    </ul>
</div>
</body>
</html>
<script>
    $(function(){
        $("#verify").click(function(){
            var num = parseInt(10*Math.random());
            alert(num)
        })
    })
</script>
