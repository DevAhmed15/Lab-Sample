<?
$conn = mysql_connect("localhost", "root", "root");

if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("lab")) {
    echo "Unable to select user: " . mysql_error();
    exit;
}

/*
$sql=mysql_query("SELECT * from test join clock where clo_id=id");
while ($row=mysql_fetch_assoc($sql)) {
	echo $row['value']."    ".$row['id'];


}
$sql=mysql_query("SELECT * from human where u_t_id=4");
$num=mysql_num_rows($sql);
echo $num;

$sql="SELECT * from human where u_t_id=4";
$res=mysql_query($sql);
$i=0;
while ($row=mysql_fetch_assoc($res)) {
	$pro[$i]=$row;
	$s=$pro[$i]['id'];
	$i++;
	echo $s."<br />";
}
*/

?>	
<select>
<option></option>
	<?
$sql=mysql_query("SELECT * from department");

while ( $row=mysql_fetch_assoc($sql)) {
	echo "<option>".$row['dep_name']."</option>";
}
	?>
</select>
<select>
<option></option>
	<?
$sql2=mysql_query("SELECT * from clock");

while ( $row=mysql_fetch_assoc($sql2)) {
	echo "<option>".$row['value']."</option>";
}
	?>
</select>
<select>
<option></option>
	<?
$sql3=mysql_query("SELECT * from day");

while ( $row=mysql_fetch_assoc($sql3)) {
	echo "<option>".$row['value']."</option>";
}
	?>
</select>
<select>
<option></option>
	<?
$sql4=mysql_query("SELECT * from month");

while ( $row=mysql_fetch_assoc($sql4)) {
	echo "<option>".$row['value']."</option>";
}
	?>
</select>
	
	
	