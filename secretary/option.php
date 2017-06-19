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
				<a href="sec.php">MY Account</a>
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
         <form action="#" method="post">
         <h2>Your Process Successfully happened</h2>
				<?
				include_once("connection.php");

if(isset($_POST['ap']))
{

$sql=mysql_query("SELECT * FROM re_schedule");

$i=0;
while ($row=mysql_fetch_assoc($sql)) {
$process[$i]=$row;
$pID=$process[$i]['pat_id'];
$cID=$process[$i]['cloc_id'];
$dID=$process[$i]['d_id'];
$mID=$process[$i]['mo_id'];
$tID=$process[$i]['te_id'];


mysql_query("UPDATE test SET clo_id='$cID',day_id='$dID',mon_id='$mID',yORn='1' WHERE pa_id='$pID' AND test_id='$tID'");
/*
$subject="Approve For Change Appointment";
$message="Your Request is Approved You Can Come In Your New Choosen Appiontment";
$headers = "From: ahmed.fcih1@gmail.com".
"CC: ahmed.fcih1@gmail.com";
if(mail($email,$subject,$message,$headers)){
    echo "<script> alert('email is sent sucessfully') </script>";   
}
}
*/
}
mysql_query("DELETE FROM re_schedule where pat_id='$pID' AND te_id='$tID'");
}
else if(isset($_POST['ref']))
{
$subject2="Refuse For Change Appointment";
$message2="Sorry,This Appointment IS Previously Registered You Can choose another Time ,Thanks";
if(mail($email,$subject2,$message2)){
    echo "<script> alert('email is sent sucessfully') </script>";   
}
//mysql_query("DELETE FROM re_schedule where pat_id='$pID' AND te_id='$tID'");

}

?>
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
					<li><a href='sec.php'>Reservations For Approve</a></li>
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