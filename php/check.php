<?php
session_start();

class mysql
{
private $localhost="localhost";
private $db_user="root";
private $db_pass="root";
private $db_name="lab";

function __construct()
{
	mysql_connect($this->localhost,$this->db_user,$this->db_pass);
	mysql_select_db($this->db_name);
}
function sql()
{
	$username=$_POST['username'];
	$pass=$_POST['password'];

	$sql="SELECT * from human WHERE username='$username' AND password='$pass'  ";
	$query=mysql_query($sql);
	$num=mysql_num_rows($query);

	if($num==1)
	{
		$_SESSION['username']="username";
		$_SESSION['password']="password";
		Header("Location:admin.html");

	}
	else{
		echo "There's Wrong";
	}
}
}
$use=new mysql;
$use->sql();

?>