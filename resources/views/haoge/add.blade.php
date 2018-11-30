<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <form action="haogeAdd" method="post"> 
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div>
                <lable for="">姓名</lable>
                <input type="text" name="name"/>
            </div>
            <div>
                <lable for="">密码</lable>
                <input type="text" name="pwd"/>
            </div>
            <input type="submit" value="提交"/>
        </form>
    </table>
</body>
</html>