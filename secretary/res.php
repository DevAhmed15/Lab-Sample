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
				<h4 style="color:white;height:35px;font-size:20px;margin-left:20px;margin-top:20px;padding-left:100px;background-color:#f90000">Please Check Reservations FIRST*</h4>
		<h4 style="background-color:#e06626;padding:20px;margin-left:150px;width:250px;height:5px;font-size:20px;color:#605565;">Rescheduling Requests</h4>

         <form action="option.php" method="post">
				<?
				include_once("connection.php");
session_start();

$sql=mysql_query("SELECT * FROM re_schedule ");

?>
<table style="background-color:#fff;padding:0px;margin:0px;border:1px dotted #ccc;" >
<tr>
	<td>Patient<br>ID</td>
	<td>Clock</td>
	<td>Day</td>
	<td>Month</td>
</tr>
</table>
<table style="background-color:#29abe2;padding:5px;margin:10px;border:3px dotted #ccc;" >
<tr >
<?
$i=0;
while ($row=mysql_fetch_assoc($sql)) {
$process[$i]=$row;
$pID=$process[$i]['pat_id'];
//$_SESSION['user']=$pID;
$cID=$process[$i]['cloc_id'];
$dID=$process[$i]['d_id'];
$mID=$process[$i]['mo_id'];
$tID=$process[$i]['te_id'];

$sql2=mysql_query("SELECT * FROM test join re_schedule WHERE te_id=test_id");
$row2=mysql_fetch_assoc($sql2);

$sql3=mysql_query("SELECT * FROM clock WHERE id='$cID'");
$row3=mysql_fetch_assoc($sql3);

$sql4=mysql_query("SELECT * FROM day WHERE id='$dID'");
$row4=mysql_fetch_assoc($sql4);

$sql5=mysql_query("SELECT * FROM month WHERE id='$mID'");
$row5=mysql_fetch_assoc($sql5);

$paID=$row2['pa_id'];
$clock=$row3['value'];
$day=$row4['value'];
$month=$row5['value'];
$i++;
?>
<td >
<?
echo $paID;
?>
</td>
<td>
<?
echo $clock;
?>
</td>
<td >
<?
echo $day;
?>
</td>
<td >
<?
echo $month;
}
?>
</td>
</tr>
<style >
	td{
		padding:25px;
		margin-left:30px;
		border:3px groove #ccc;
	}

</style>

</tr>
</table>
<input style="position:relative;background-color:#eb9357;margin-left:20px;" name="ap" value="APPROVE" type="submit">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="position:relative;background-color:#eb9357;margin-left:20px;" name="ref" value="REFUSE" type="submit">


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
					<li ><a href='sec.php'>Reservations For Approve</a></li>
					<li><a href="getall.php">See Reservations</a></li>
					<li class="selected-Li"><a href="res.php">New Re-Scheduling</a></li>
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