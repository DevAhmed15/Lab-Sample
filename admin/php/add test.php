<?

require_once("connection.php");



if(isset($_POST['submit'])){

$na=(is_string($_POST['test']));
if($na)
$test=$_POST['test'];
else
echo "Invalid Name";

$price=$_POST['price'];


if( empty($test) || empty($price) )
	{
	echo "<script> alert('insert all data !!') </script>";
	exit();
	}

$search=mysql_query("SELECT * FROM department where dep_name='$test'");

$check=mysql_num_rows($search);

if($check == 1)
	{
	echo "<script> alert('Failed!! Found ON DataBase') </script>";
	exit();
	}

else{
	$sql="insert INTO department(dep_name,price) VALUES ('$test','$price')";
	mysql_query($sql);
	header("Location:../admin D.html");
}


}
	?>