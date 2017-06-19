<?php 

require_once("connection.php");


if(isset($_POST['submit'])){

$na=(is_string($_POST['name']));
if($na)
$name=$_POST['name'];
else
echo "Invalid Name";
$email=@$_POST['email'];
$password=@$_POST['password'];
$age=@$_POST['age'];
$gender=@$_POST['gender'];

if(empty($name) || empty($email) || empty($password) || empty($age) || empty($gender)){
	echo "<script> alert('insert all data !!') </script>";
	exit();
}

$sql="INSERT into human(name,email,password,gender,age,u_t_id) VALUES ('$name','$email','$password','$gender','$age','4')";
mysql_query($sql);
header("Location:../index.html");
}
?>
