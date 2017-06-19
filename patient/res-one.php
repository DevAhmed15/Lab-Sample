

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
				<a href="patient p.php">MY Account</a>
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
        <form action="res-two.php" method="post">
<?

require_once("connection.php");
session_start();
$user_check=$_SESSION['login_user'];
if(isset($_POST['submit']))
{
	$test=$_POST['numb'];
	if ( empty($test)) {
	echo "<script> alert('No Data Inserted ') </script>";
	exit();
	}
	$sql=mysql_query("SELECT * FROM human WHERE email='$user_check'");
	$R=mysql_fetch_assoc($sql);
	$paID=$R['id'];
	$_SESSION['patient']=$paID;

	$sq=mysql_query("SELECT * FROM test WHERE pa_id='$paID' AND test_id='$test'");
     $R2=mysql_fetch_assoc($sq);
     $t=$R2['test_id'];
     $_SESSION['test']=$t;

	$check=mysql_num_rows($sq);;
	if ($check !=1 ) {
	echo "<script> alert('ID is not Valid !!  ') </script>";
	exit();
	}
	else
	{
		?>
		<h2>Please Insert New Appointment</h2>
		<form action="res-two.php" method="post" style="position:relative;top:10px;">

CLOCK* : <select name="clock">
<option>--CLOCK--</option>
	<?
$sql2=mysql_query("SELECT * from clock");

while ( $row=mysql_fetch_assoc($sql2)) {
	echo "<option>".$row['value']."</option>";
}
	?>
</select>
<br /><br>
DAY* : <select name="day">
<option>--DAY--</option>
	<?
$sql3=mysql_query("SELECT * from day");

while ( $row=mysql_fetch_assoc($sql3)) {
	echo "<option>".$row['value']."</option>";
}
	?>
</select><br><br>
MONTH* : <select name="month">
<option>--MONTH</option>
	<?
$sql4=mysql_query("SELECT * from month");

while ( $row=mysql_fetch_assoc($sql4)) {
	echo "<option>".$row['value']."</option>";
}}}
	?>
</select>
                <br> <br>
                <input type="submit" name="submit" value="Sure">
</form>
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