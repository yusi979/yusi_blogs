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
    <table>
        <form action="update" method="post" enctype="multipart/form-data"> 
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
            <input type="hidden" name="id" value="<?= $data->id ?>">
            <div>
                <lable for="">姓名</lable>
                <input type="text" name="name" value="<?= $data->name?>"/>
            </div>
            <div>
                <lable for="">密码</lable>
                <input type="text" name="pwd"  value="<?= $data->pwd?>"/>
            </div>
            <input type="submit" value="修改"/>
        </form>
    </table>
</table>
</body>
</html>