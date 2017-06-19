<?
include ("connection.php");
session_start();

$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("SELECT * from human where email='$user_check'");
$row = mysql_fetch_assoc($ses_sql);



?>