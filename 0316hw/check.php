<?php
session_start();

$id=$_POST["id"];
$pwd=$_POST["pwd"];
$pcpid="1";
$pcppwd="principal";
$tcid="2";
$tcpwd="teacher";
$stuid="3";
$stupwd="student";

if(($id==$pcpid)&&($pwd==$pcppwd))
{
    $_SESSION["chara"]="principal";
    header("Location:principal.php");
}
else if(($id==$tcid)&&($pwd==$tcpwd))
{
    $_SESSION["chara"]="teacher";
    header("Location:teacher.php");
}
else if(($id==$stuid)&&($pwd==$stupwd))
{
    $_SESSION["chara"]="student";
    header("Location:student.php");
}
else
{
    $_SESSION["chara"]="other";
    header("Location:err_idorpwd.php");
}
?>