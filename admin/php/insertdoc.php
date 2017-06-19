<?
require_once("connection.php");



if(isset($_POST['submit'])){

$na=(is_string($_POST['first']));
if($na)
$name=$_POST['first'];
else
echo "Invalid Name";
$email=@$_POST['email'];
$password=@$_POST['phone'];
$age=@$_POST['age'];
$gender=@$_POST['gen'];

$sal=@$_POST['salary'];
$add=@$_POST['add'];
$dep=@$_POST['dep'];

if(empty($name) || empty($email) || empty($password) || empty($age) || empty($gender) || empty($sal)|| empty($add)|| empty($dep)){
	echo "<script> alert('insert all data !!') </script>";
	exit();
}

$name = stripslashes($name);
$name = preg_replace('/\d/', '', $name );
$email = stripslashes($email);


$s=mysql_query("Select * from human where email='$email'");
$res=mysql_num_rows($s);
if($res == 1)
{
		echo "<script> alert('Email is Previous Registered !!') </script>";
	exit();
}
$sD=mysql_query("Select * from department where dep_name='$dep'");
$resD=mysql_fetch_assoc($sD);
$dID=$resD['department_id'];

$sql="INSERT into human(name,email,password,gender,age,u_t_id) VALUES ('$name','$email','$password','$gender','$age','2')";
mysql_query($sql);

 $sqlCheck=mysql_query("SELECT * FROM address where area='$add'");
 $rAdd=mysql_fetch_assoc($sqlCheck);
 $check=mysql_num_rows($sqlCheck);

 $sqlCheck2=mysql_query("SELECT * FROM salary where value='$sal'");
 $rSal=mysql_fetch_assoc($sqlCheck2);
 $check2=mysql_num_rows($sqlCheck2);


 if($check == 1 && $check2 == 1)
 {

 $aID=$rAdd['address_id'];
  $sID=$rSal['salary_id'];

$addD="INSERT into doctor(dep_id,add_id,sal_id,u_t_id) VALUES ('$dID','$aID','$sID','2')";
mysql_query($addD);
 }
 else if($check == 1 && $check2 != 1)
 {
 	 $addID=$rAdd['address_id'];

 	mysql_query("INSERT INTO salary(value) VALUES ('$sal') ");

  $sqlCh2=mysql_query("SELECT * FROM salary where value='$sal'");
  $R2=mysql_fetch_assoc($sqlCh2);
  $salID=$R2['salary_id'];

mysql_query("INSERT into doctor(dep_id,add_id,sal_id,u_t_id) VALUES ('$dID','$addID','$salID','2')");

 }

else if($check2 == 1 && $check!=1){
 $saID=$rSal['salary_id'];
 	 
 	mysql_query("INSERT INTO address(area) VALUES ('$add') ");

 $sqlCh=mysql_query("SELECT * FROM address where value='$add'");
 $R=mysql_fetch_assoc($sqlCh);
 $adID=$R['address_id'];
$sql2="INSERT into doctor(sal_id,add_id,dep_id,u_t_id) VALUES ('$dID','$adID','$saID','2')";
mysql_query($sql2);

}
else
{
	 	mysql_query("INSERT INTO salary(value) VALUES ('$sal') ");
	 	 	mysql_query("INSERT INTO address(area) VALUES ('$add') ");

$sqlC=mysql_query("SELECT * FROM salary where value='$sal'");
 $RR=mysql_fetch_assoc($sqlC);
  $saaID=$RR['salary_id'];

   $sqL=mysql_query("SELECT * FROM address where area='$add'");
 $R=mysql_fetch_assoc($sqL);
 $aDID=$R['address_id'];

 $sql2="INSERT into doctor(sal_id,add_id,dep_id,u_t_id) VALUES ('$dID','$aDID','$saaID','2')";
mysql_query($sql2);

}
header("Location:../admin D.html");

}
?>