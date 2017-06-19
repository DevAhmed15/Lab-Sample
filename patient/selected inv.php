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
		<h1 style="margin-left:280px;color:#f3721c;">YOUR Invoice</h1>
		<hr style="width:100%;">
		<style type="text/css">

		h4 {
			margin-left: 150px;
			margin-top: -20px;
            color:#3c9eef;
			}
			</style>
<div id="data">
	<?
	require_once("connection.php");
	session_start();
$user_check=$_SESSION['login_user'];
$sql1=mysql_query("select * from human where email='$user_check'");

$row=mysql_fetch_array($sql1);


$selected=$_POST['test'];
if($selected !='')
{
$sql=mysql_query("SELECT * FROM department WHERE dep_name='$selected'");

$sqlC=mysql_query("SELECT * from test join clock where clo_id=id");

$sqlD=mysql_query("SELECT * from test join day where day_id=id");

$sqlM=mysql_query("SELECT * from test join month where mon_id=id");

$DEP=mysql_fetch_array($sql);
$rowC=mysql_fetch_array($sqlC);
$rowD=mysql_fetch_array($sqlD);
$rowM=mysql_fetch_array($sqlM);

	?>
<div style="background-color:#fdd375;marging-left:10px;border:2px dotted #ccc;">
    <h3> ID    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<? echo "<h4>".$row['id']."</h4>"; ?></h3><br /><hr>
	<h3>Name         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   : <? echo "<h4>".$row['name']."</h4>"; ?></h3><br /><hr>
	<h3>Gender        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :<? echo "<h4>".$row['gender']."</h4>"; ?> </h3><br /><hr>
	<h3>Age           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : <? echo "<h4>".$row['age']."</h4>"; ?></h3><br /><hr>
	<h3>History OF Test : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </h3><? echo "<h4>".$rowC['value']."am <br /></h4><h4>"."Day ".$rowD['value']."<br />".$rowM['value']."</h4>"; ?><br /><hr>
	<h3>Test ID     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  <? echo "<h4>".$DEP['department_id']."</h4>"; ?></h3><br /><hr>
	<h3>Test Name     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  <? echo "<h4>".$DEP['dep_name']."</h4>"; ?></h3><br /><hr>
	<h3>Test Price    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : <? echo "<h4>".$DEP['price']." $</h4>"; ?></h3>
</div>
<?}
if($selected ==''){

	echo "<h2>Not Valid Selection<h2>"."<br /><br /><br /><br /><br /><br />";

}?>
	<button><a href="invoices.php">GO Back</a></button>



</div>
     <br> <br>
            </div>
		</div>
		<div class="side-bar">
			<h3>Patient</h3>
			<div id='Admin-list'>
			    <ul>
					<li><a href="patient p.php">Reserve Appointment</a></li>
					<li><a href="getall.php">Get All Reservations</a></li>
					<li ><a href="invoices.php">INVOICES OF TESTS</a></li>
					<li ><a href="rescedule.php">Rescedulling</a></li>
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