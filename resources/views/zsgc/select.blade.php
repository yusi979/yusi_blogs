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
        <th>ID</th>
        <th>昵称</th>
        <th>密码</th>
        <th>操作</th>
        <?php foreach($data as $key=>$value){ ?>
            <tr>
                <td><?= $value->id;?></td>
                <td><?= $value->name;?></td>
                <td><?= $value->pwd;?></td>
                <td>
                    <a href="delete?id=<?= $value->id;?>">删除</a>
                    <a href="upShow?id=<?= $value->id;?>">修改</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>