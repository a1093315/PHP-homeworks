<?php
session_start();

if($_SESSION["chara"]=="principal")
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
        此為校長之頁面<br/>
        <p>
        校長身分可看老師頁面，是否前往?<br/>
        <a href="teacher.php">好啊，那走啊</a><br/>
        <a href="logout.php">看夠了，我要登出</a>
    </body>
</html>