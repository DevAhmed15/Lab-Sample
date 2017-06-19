
<?
if(isset($_POST['one']))
{
	echo "good";
}
else if(isset($_POST['two']))
{
	echo "Two good";
}
 /*$sqlCheck=mysql_query("SELECT * FROM address where area='cairo'");
 $r=mysql_fetch_assoc($sqlCheck);
 $check=mysql_num_rows($sqlCheck);

 $sqlCheck2=mysql_query("SELECT * FROM salary where value='1850'");
 $r2=mysql_fetch_assoc($sqlCheck2);
 $check2=mysql_num_rows($sqlCheck2);


 if($check == 1 && $check2 == 1)
 {
 	echo "good";
 	 $aID=$r['address_id'];
  $sID=$r2['salary_id'];
  echo $sID."  ".$aID;
 }
 else if($check == 1 && $check2 != 1)
 {
 	 $addID=$r['address_id'];

 	mysql_query("INSERT INTO salary(value) VALUES ('1880') ");

  $sqlCh2=mysql_query("SELECT * FROM salary where value='1880'");
  $R2=mysql_fetch_assoc($sqlCh2);
  $salID=$R2['salary_id'];

$sql2="INSERT into doctor(sal_id,add_id,dep_id,u_t_id) VALUES ('$salID','$addID','$dID','2')";
mysql_query($sql2);

 }
elseif ($check2 == 1 && $check != 1) {
	echo "Ngood";
}
else {
	echo "NOT FOUND!!";
}*/
/*<!--



<select>
<option></option>
<?
require_once("connection.php");


$sqlOpt=mysql_query("SELECT * FROM Roption join Rselection WHERE op_id=option_id ");

$sqlRes=mysql_query("SELECT * FROM resources join Rselection WHERE res_id=resou_id ");

$i=0;
while ($rowRes=mysql_fetch_assoc($sqlRes)) {
$rowOpt=mysql_fetch_assoc($sqlOpt);
$opt[$i]=$rowOpt;
$res[$i]=$rowRes;
if($res[$i]['resou_id']==1){
echo "<option>".$opt[$i]['name']."</option>";
}
$i++;
}
?>
</select>
<select>
<option></option>
<?

$sqlOpt=mysql_query("SELECT * FROM Roption join Rselection WHERE op_id=option_id ");

$sqlRes=mysql_query("SELECT * FROM resources join Rselection WHERE res_id=resou_id ");
$i=0;
while ($rowRes=mysql_fetch_assoc($sqlRes)) {
$rowOpt=mysql_fetch_assoc($sqlOpt);
$opt[$i]=$rowOpt;
$res[$i]=$rowRes;
if($res[$i]['resou_id']==2){
echo "<option>".$opt[$i]['name']."</option>";
}
$i++;
}
?>
</select>-->*/
?>