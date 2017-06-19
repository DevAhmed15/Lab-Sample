


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
<?
require_once("connection.php");
session_start();
$paID=$_SESSION['patient'];
$tID=$_SESSION['test'];

if(isset($_POST['submit']))
{
	$clock=$_POST['clock'];
	$day=$_POST['day'];
	$month=$_POST['month'];

	if ( !isset($clock) || !isset($day) || !isset($month)) {
	echo "<script> alert('Insert All Data!!!') </script>";
	exit();
}


mysql_query("UPDATE test SET yORn='0' WHERE pa_id='$paID' AND test_id='$tID' ");

$sql2=mysql_query("SELECT * from clock WHERE value='$clock' ");
$row2=mysql_fetch_assoc($sql2);
$sql3=mysql_query("SELECT * from day WHERE value='$day' ");
$row3=mysql_fetch_assoc($sql3);
$sql4=mysql_query("SELECT * from month WHERE value='$month' ");
$row4=mysql_fetch_assoc($sql4);

$cl_id=$row2['id'];
$da_id=$row3['id'];
$mo_id=$row4['id'];

mysql_query("INSERT INTO re_schedule(pat_id,cloc_id,d_id,mo_id,te_id) VALUES ('$paID','$cl_id','$da_id','$mo_id','$tID')");
}
?>
<div style="background-color:#8dc360; width:600px; height:150px;margin-left:50px;margin-top:50px;">
	<h3 style="margin-left:50px;margin-top:20px;color:#ea5247;font-size:18px;">Your Re-Scedulling Successfully Registered</h3>
	<h3 style="margin-left:50px;margin-top:20px;color:#ea5247;font-size:18px;">Please , Check Your Email > You Will Recieve The Responce </h3>
</div>
		
	</div>
		<form  method="post" style="margin-left:20px;">
                
                <br>
                <br> <br>
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