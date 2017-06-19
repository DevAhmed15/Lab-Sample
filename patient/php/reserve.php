<?

require_once("connection.php");

session_start();


if(isset($_POST['submit']))
{
	$test=$_POST['test'];
	$clock=$_POST['clock'];
    $day=$_POST['day'];
	$month=$_POST['month'];
if(empty($_POST['yes']))
{
echo "<script> alert('insert all data') </script>";
exit();
}

  $user_check = $_SESSION['login_user'];


$ses_sql=mysql_query("SELECT * from human where email='$user_check'");
$row = mysql_fetch_assoc($ses_sql);
$paId=$row['id'];

	$sql="SELECT * FROM clock WHERE value='$clock'";
	$res=mysql_query($sql);
	$sqlC=mysql_fetch_array($res);
	$cID=$sqlC['id'];

$checkC=mysql_query("select * from test where clo_id=$cID");
$cCount=mysql_num_rows($checkC);
	
		$sql1="SELECT * FROM day WHERE value='$day'";
	$res1=mysql_query($sql1);
	$sqlD=mysql_fetch_array($res1);
	$dID=$sqlD['id'];

$checkD=mysql_query("select * from test where day_id=$dID");
$dCount=mysql_num_rows($checkD);

		$sql2="SELECT * FROM month WHERE value='$month'";
	$res2=mysql_query($sql2);
	$sqlM=mysql_fetch_array($res2);
	$mID=$sqlM['id'];


$checkM=mysql_query("select * from test where mon_id=$mID");
$mCount=mysql_num_rows($checkM);

if($cCount == 1 && $dCount == 1 && $mCount ==1)
{
	echo "<script> alert('This Appiontment Is Previously Reserved !!') </script>";
exit();
}
	$sql3="SELECT * FROM  department WHERE dep_name='$test'";
	$res3=mysql_query($sql3);
	$sqlT=mysql_fetch_array($res3);
	$tID=$sqlT['department_id'];

	$query=mysql_query("INSERT INTO test(pa_id,clo_id,day_id,mon_id,dep_id,yORn) VALUES ('$paId','$cID','$dID','$mID','$tID','1')");
	header("Location:../A_L/index.html");
}

?>