<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Adminstrator | Senior lab</title>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <link rel="short cut" href="">
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
        <a href="index.html" class="logo">
		<h2><span>Senior</span> lab
		<p>Your health is our responsibility</p></h2>
		</a><br><br>
		<ul>
			<li>
				<a href="A_L/index.html">Home</a>
			</li>
			<li>
				<a href="A_L/about.html">About</a>
			</li>
			<li>
				<a href="A_L/services.html">Services</a>
			</li>
			<li class="selected">
				<a href="#">MY Account</a>
			</li>
			<li>
				<a href="../php/logout.php">LOGOUT</a>
			</li>
			<li>
				<a href="A_L/location.html">contact</a>
			</li>
			<li>
				<a href="A_L/blog.html">blog</a>
			</li>
		</ul>
	</div><br><br><br>
		<div id="search-box">
		<form method="get" action="#">
		     <input type="text" placeholder="Search here.." class="search" autocomplete="off" outline="none" border="none"/>
		     <button type="submit">Search</button>
		</form>
		</div>
	<div id="body">
		<div class="content">
			<img src="images/m.jpg" alt="">
        <div class="admin-content">
		<h2>Welcome SECRETARY..</h2>
		<div id="data" >
<font>ID</font>
<font class="font">Test Name</font>
<font id="three">Select Resource</font>
<font id="four">Resource Name</font>
		</div>
		<style >
#data{
border:3px dotted #ccc;width:700px;
background-color: #de7d78;
height: 20px;
}
.font
{
	margin-left: 30px;
}
#three{ margin-left: 100px;
}
#four{ margin-left: 70px;
}
		</style>
         <form action="php/approve.php" method="post">
				<?
				include_once("connection.php");
session_start();

$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("SELECT * from human where email='$user_check'");
$row = mysql_fetch_assoc($ses_sql);
$hID=$row['id'];
$sql=mysql_query("SELECT * FROM test WHERE resource_id IS NULL AND r_op_id IS NULL");
$rowR= mysql_fetch_assoc($sql);
$check=mysql_num_rows($sql);

$dep=$rowR['dep_id'];

$sql2=mysql_query("SELECT * FROM department WHERE department_id='$dep' ");
$rowD= mysql_fetch_assoc($sql2);
if($check!=0){
				?>


				<table style="border:3px dotted #ccc;width:700px;">
					<?
$pID=$rowR['pa_id'];
$dNam=$rowD['dep_name'];
$_SESSION['user']=$pID;
echo " 
<tr><td>$pID </td>
<td>$dNam </td>
";
?>
<td>
<select name="res">
<option></option>
<?
$sqle=mysql_query("SELECT * FROM resources");
while ($rowe=mysql_fetch_assoc($sqle)) {

echo "<option>".$rowe['name']."</option>";
}
?>
</select>
</td>
<td><select name="type">
<option></option>
<?
$sqll=mysql_query("SELECT * FROM Roption");
while ($roww=mysql_fetch_assoc($sqll)) {


if($roww['op_id']<=8){
	?>
	<optgroup label="Room">
	<?
echo "<option>".$roww['name']."</option></optgroup>";
}
else{
	?>
	<optgroup label="Device">
	<?
	echo "<option>".$roww['name']."</option></optgroup>";
}}}
?>
</select>
</td></table>
<input style="position:relative;background-color:#eb9357;margin-left:20px;" name="submit" value=" -RESERVE-" type="submit">
		</form>	
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
		</div>
		<div class="side-bar">
			<h3>SECRETARY</h3>
			<div id='Admin-list'>
			    <ul>
					<li class="selected-Li"><a href='sec.php'>Reservations For Approve</a></li>
					<li><a href="getall.php">See Reservations</a></li>
					<li><a href="res.php">New Re-Scheduling</a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>

				</ul>
			 </div>
	</div>
	</div>
	<div id="footer">
		<div>
			<p>
				<span>Copyrights &copy; 2015 All rights reserved | Template by </span><a href="#" >FCIH Developers</a>
			</p>
			<ul>
				<li id="facebook">
					<a href="http://freewebsitetemplates.com/go/facebook/">facebook</a>
				</li>
				<li id="twitter">
					<a href="http://freewebsitetemplates.com/go/twitter/">twitter</a>
				</li>
				<li id="googleplus">
					<a href="http://freewebsitetemplates.com/go/googleplus/">googleplus</a>
				</li>
				<li id="rss">
					<a href="#" >rss</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>