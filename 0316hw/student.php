<?php
session_start();

if(($_SESSION["chara"]=="teacher") || ($_SESSION["chara"]=="student"))
{
}
else if($_SESSION["chara"]=="other")
{
    header("Location:err_idorpwd.php");
}
else
{
    header("Location:err_authority.php");
}
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        此為學生之頁面<br/>
        <p>
        老師身分可回到老師頁面，是否前往?<br/>
        <a href="teacher.php">好啊，我要回老師頁面</a><br/>
        <a href="logout.php">不了，我是學生，我要登出</a>
    </body>
</html>