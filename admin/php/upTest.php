<?
require_once("connection.php");



if(isset($_POST['submit'])){

$old=@$_POST['first'];
$new=@$_POST['email'];

if(empty($new) || empty($old) ){
	echo "<script> alert('insert all data !!') </script>";
	exit();
}

$sql=mysql_query("SELECT * from department where dep_name='$old'");
$check=mysql_num_rows($sql);

if($check==1){
	mysql_query("UPDATE department set dep_name='$new' WHERE dep_name='$old' ");
	header("Location:../admin D.html");
}
else {
	echo "<script> alert('NoT FOUND THIS TEST') </script>";
	exit();
}


}

?>