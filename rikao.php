<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/14
 * Time: 8:35
 */


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
        <table>
            <tr>
                <td><input type="button" value="谁最帅" onclick="dian()"></td>
                <td><p id="d"></p></td>
            </tr>
            <tr>
                <td><input type="button" value="谁最傻" onclick="ji()"></td>
            </tr>
        </table>
    </center>
</body>
</html>
<script>
    function dian(){
        var q = "";
        for(var i=0;i<10;i++)
        {
            q=q + "你猜" + i + "<br>";
        }
        document.getElementById("d").innerHTML=q;
    }
    function ji()
    {
        alert("甘少冬最傻");
    }
</script>

