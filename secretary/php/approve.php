<?
include ("connection.php");

session_start();
  $user = $_SESSION['user'];



if(isset($_POST['submit'])){

$res=@$_POST['res'];
$type=@$_POST['type'];


$sql1=mysql_query("SELECT * FROM resources WHERE name='$res'");
$row1=mysql_fetch_assoc($sql1);

$rID=$row1['res_id'];

$sql2=mysql_query("SELECT * FROM Roption WHERE name='$type'");
$row2=mysql_fetch_assoc($sql2);

$dID=$row2['op_id'];

mysql_query("UPDATE test SET resource_id='$rID', r_op_id='$dID' WHERE pa_id='$user' ");
header("Location:../A_L/index.html");
}
?>