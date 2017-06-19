<?
require_once("connection.php");

if(isset($_POST['submit'])){

$name=$_POST['first'];

$email=@$_POST['email'];
$password=@$_POST['phone'];
$age=@$_POST['age'];
$gender=@$_POST['gen'];

$name = preg_replace('/\d/', '', $name );
$name = stripslashes($name);
$email = stripslashes($email);

$sal=@$_POST['salary'];
$add=@$_POST['add'];

if(empty($name) || empty($email) || empty($password) || empty($age) || empty($gender)|| empty($sal)|| empty($add)){
	echo "<script> alert('insert all data !!') </script>";
	exit();
}
$s=mysql_query("Select * from human where email='$email'");
$res=mysql_num_rows($s);
if($res == 1)
{
		echo "<script> alert('Email is Previous Registered !!') </script>";
	exit();
}
$sql="INSERT into human(name,email,password,gender,age,u_t_id) VALUES ('$name','$email','$password','$gender','$age','3')";
mysql_query($sql);

 $sqlCheck=mysql_query("SELECT * FROM address where area='$add'");
 $R=mysql_fetch_assoc($sqlCheck);
 $check=mysql_num_rows($sqlCheck);

 $sqlCheck2=mysql_query("SELECT * FROM salary where value='$sal'");
 $r2=mysql_fetch_assoc($sqlCheck2);
 $check2=mysql_num_rows($sqlCheck2);


 if($check == 1 && $check2 == 1)
 {

 $aID=$r['address_id'];
  $sID=$r2['salary_id'];

$sql2="INSERT into secretary(sal_id,add_id,u_t_id) VALUES ('$sID','$aID','3')";
mysql_query($sql2);
}

 else if($check ==1 && $check2 != 1)
 {
 	 $addID=$R['address_id'];

 	mysql_query("INSERT INTO salary(value) VALUES ('$sal') ");

 $sqlCh2=mysql_query("SELECT * FROM salary where value='$sal'");
 $R2=mysql_fetch_assoc($sqlCh2);
  $salID=$R2['salary_id'];

$sql3="INSERT into secretary(sal_id,add_id,u_t_id) VALUES ('$salID','$addID','3')";
mysql_query($sql3);
 }

else if($check2 == 1 && $check != 1){
    $saID=$r2['salary_id'];
 	 
 	mysql_query("INSERT INTO address(area) VALUES ('$add') ");

   $sqlCh=mysql_query("SELECT * FROM address where area='$add'");
 $R=mysql_fetch_assoc($sqlCh);
 $adID=$R['address_id'];
$sql4="INSERT into secretary(sal_id,add_id,u_t_id) VALUES ('$saID','$adID','3')";
mysql_query($sql4);

}
else
{
mysql_query("INSERT INTO salary(value) VALUES ('$sal') ");
mysql_query("INSERT INTO address(area) VALUES ('$add') ");

 $sqL=mysql_query("SELECT * FROM salary where value='$sal'");
 $RR=mysql_fetch_assoc($sqL);
 $SID=$RR['salary_id'];

 $sqL2=mysql_query("SELECT * FROM address where area='$add'");
 $Rr=mysql_fetch_assoc($sqL2);
 $AID=$Rr['address_id'];

$sql5="INSERT into secretary(sal_id,add_id,u_t_id) VALUES ('$SID','$AID','3')";
mysql_query($sql5);

}
header("Location:../admin D.html");

}
?>