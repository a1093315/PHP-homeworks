<?php
session_start();

if(($_SESSION["chara"]=="principal") || ($_SESSION["chara"]=="teacher"))
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
        此為老師之頁面<br/>
        <p>
        老師身分可看學生頁面，是否前往?<br/>
        <a href="student.php">好啊，那走啊</a><br/>
        <a href="principal.php">不了，我是校長，我要回校長頁面</a><br/>
        <a href="logout.php">看夠了，我要登出</a>
    </body>
</html>