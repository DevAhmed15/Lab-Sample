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
<div id="data">
	<?
	require_once("connection.php");
	session_start();
$user_check=$_SESSION['login_user'];
$sql1=mysql_query("select * from human where email='$user_check'");
$row=mysql_fetch_array($sql1);
$hID=$row['id'];

$sql2=mysql_query("SELECT * from test where pa_id=$hID AND resource_id IS NOT NULL AND yORn=1");

$num=mysql_num_rows($sql2);

$sqlC=mysql_query("SELECT * from test join clock where clo_id=id AND pa_id=$hID");

$sqlD=mysql_query("SELECT * from test join day where day_id=id AND pa_id=$hID");

$sqlM=mysql_query("SELECT * from test join month where mon_id=id AND pa_id=$hID");

$sqlDep=mysql_query("SELECT * from test join department where dep_id=department_id AND pa_id=$hID");


$i=0;
$j=1;
?>
<table border="2" bgcolor="#f5e677">
<?
echo " 
<tr> 
<td>------- RESERVATIONS ----</td>
<td>--- TEST ID ---</td>
<td>--- Clock ---</td>
<td>--- Day ---</td>
<td>--- MONTH ---</td>
<td>--- TEST NAME ---</td>
<td>--- TEST PRICE ----</td>
</tr></table>
"."<br /> <br />";
while($i<$num)
{
$row2=mysql_fetch_array($sql2);
$rowC=mysql_fetch_array($sqlC);
$rowD=mysql_fetch_array($sqlD);
$rowM=mysql_fetch_array($sqlM);
$rowDep=mysql_fetch_array($sqlDep);

$pro[$i]=$row2;

$tID=$row2['test_id'];

$proC[$i]=$rowC;
$proD[$i]=$rowD;
$proM[$i]=$rowM;
$proDep[$i]=$rowDep;


$clo=$proC[$i]['value'];
$day=$proD[$i]['value'];
$mon=$proM[$i]['value'];
$depN=$proDep[$i]['dep_name'];
$depP=$proDep[$i]['price'];

?>
<table border="2" bgcolor="#29abe2"> 
<?
echo "
<tr> 
<td>-------RESERVATION $j----</td>
<td>---------- $tID ------</td>
<td>---------- $clo ------</td>
<td>----- $day ---</td>
<td>----- $mon -----</td>
<td>--- $depN -----</td>
<td>------ $depP $------</td>
</tr>
";

$i++;$j=$i+1;
}
echo "</table>";
	?>

</div>
     <br> <br>
              </form> 
            </div>
		</div>
		<div class="side-bar">
			<h3>Patient</h3>
			<div id='Admin-list'>
			    <ul>
					<li><a href="patient p.php">Reserve Appointment</a></li>
					<li  class="selected-Li"><a href="getall.php">Get All Reservations</a></li>
			        <li ><a href="invoices.php">INVOICES OF TESTS</a></li>
			        <li ><a href="rescedule.php">Rescedulling</a></li>
					<li></li>
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