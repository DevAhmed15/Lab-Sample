
<?php

session_start(); // Starting Session
$connect = mysql_connect("localhost", "root", "root");

if (!$connect) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("lab")) {
    echo "Unable to select user: " . mysql_error();
    exit;
}
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['Email']) || empty($_POST['password'])) {
echo "<script> alert('insert all data') </script> ";
}
else
{

$email=$_POST['Email'];
$password=$_POST['password'];


$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);

$query = mysql_query("SELECT * from human where password='$password' AND email='$email'");
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$email;
$row=mysql_fetch_assoc($query);
$u_id=$row['u_t_id'];
	switch ($u_id) {
		case '1':
	 Header("location:../admin/admin D.html");
			break;
		case '2':
	 Header("location:../doctor/doc D.php");
			break;

		case '3':
	 Header("location:../secretary/sec.php");
			break;

        case '4':
	 Header("location:../patient/patient p.php");
			break;
	}	
} else {
$error = "Username or Password is invalid";
echo "<script> alert('$error') </script>";
}

}
}

?>

