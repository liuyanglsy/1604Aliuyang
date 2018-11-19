<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/19
 * Time: 9:19
 */
$pdo = new PDO("mysql:host=127.0.0.1;dbname=test","root","root");
$sql = "SELECT * from zhoukao";
$data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
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
<center>
    <table border="1">
        <input type="text">
        <input type="button" value="搜索">
        <tr>
            <td>id</td>
            <td>用户名</td>
            <td>密码</td>
            <td>操作</td>
        </tr>
        <?php foreach ($data as $v){ ?>
            <tr>
                <td><?php echo $v['id'] ?></td>
                <td><?php echo $v['user'] ?></td>
                <td><?php echo $v['pwd'] ?></td>
                <td><a href="">删除</a></td>
            </tr>
        <?php } ?>
    </table>
    <a href="">首页</a>
    <a href="">上一页</a>
    <a href="">下一页</a>
</center>
</body>
</html>

