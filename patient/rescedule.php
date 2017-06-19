<?
session_start();
$user_check=$_SESSION['login_user'];

?>
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
		<h2>Welcome Patient..</h2>
		<div style="background-color:#e30b0b;width:700px;">
		<h4 style="color:white;height:35px;font-size:20px;margin-left:20px;margin-top:20px;padding-left:100px;background-color:#f90000">Please Check Your Reservations FIRST*</h4>
		
	</div>
		<form action="res-one.php" method="post" style="margin-left:20px;">
		<h2> Please ,  Insert Test ID </h2>
<input style="background" type="text" name="numb" /><br /><br />
<input type="submit" name="submit" />
                
                <br>
                <br> <br>
              </form> 
            </div>
		</div>
		<div class="side-bar">
			<h3>Patient</h3>
			<div id='Admin-list'>
			    <ul>
					<li><a href="patient p.php">Reserve Appointment</a></li>
					<li ><a href="getall.php">Get All Reservations</a></li>
					<li ><a href="invoices.php">INVOICES OF TESTS</a></li>
					<li class="selected-Li"><a href="rescedule.php">Rescedulling</a></li>
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