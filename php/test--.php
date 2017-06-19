<?php
$conn = mysql_connect("localhost", "root", "root");

if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("lab")) {
    echo "Unable to select user: " . mysql_error();
    exit;
}

$sql=mysql_query("SELECT * FROM salary where value=4000");
$res=mysql_num_rows($sql);
if($res == 1)
{
	$sql2=mysql_query("INSERT INTO salary(value) VALUES ('5000')");
	$sqL=mysql_query("SELECT * FROM salary where value=5000");
	$row=mysql_fetch_array($sqL);
	echo $row['salary_id'];
}
/*
$sql="SELECT u_t_id from human ";
$query=mysql_query($sql);
$row=mysql_fetch_assoc($query) ;
*/



/*if(isset($_POST['submit']))
{
$email=$_POST['name'];
$password=$_POST['pass'];

$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);
$sel=mysql_query("SELECT * from human WHERE email='$email' AND password='$password' ");

$result=mysql_num_rows($sel);
if($result==1)
{
	$row=mysql_fetch_assoc($sel);
	switch ($row['u_t_id']) {
		case '1':
	 Header("location:yes.php");
			break;
		case '2':
	 Header("location:yes2.php");
			break;

		case '3':
	 Header("location:yes3.php");
			break;

        case '4':
	 Header("location:yes4.php");
			break;
	}	
}
else
echo "Invalid User";
}*/


/*
$sql="SELECT * from human join appointment where appointment.id=human.app_id";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
    echo $row['id']."   ".$row['name']."   ".$row['password']."   ".$row['app_id']."<br />".$row['id']."   ".$row['value']."<br />";
}
    
*/

?>


