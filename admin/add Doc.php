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
		<h2>Welcome MANAGER...</h2>
         <form action="php/insertdoc.php" method="post" style="margin-left:50px;">
				<label for="firstName"> <span>Name*</span>
					<input type="text" name="first" id="firstName">
				</label>
				<label for="email"> <span>email*</span>
					<input type="email" name="email" id="email">
				</label>
				<label for="phoneNumber"> <span>Password*</span>
					<input type="Password" name="phone" id="phoneNumber">
				</label>
				<label><span>Gender*</span></label>
				<div class="gender">
				<select name="gen">
				<option>GENDER</option>
				<option>Male</option>
				<option>Female</option>
				</select>
				</div><br>		
                <label><span>Age*</span></label>
                <div class="gender">
				                <input type="text" name="age" id="ag">
				
				 <label for="fie"><span>SALARY*</span></label>
					<input type="text" name="salary" id="fie">
				
				 <label for="f"><span >Address*</span></label>
					<input type="address" name="add" id="f">
				
					<label> <span>Department*</span></label>
                     <select name="dep">
                     <option> </option>
					 <?
					 include ("connection.php");
                      
                      $sql=mysql_query("SELECT * FROM department");
                      while ( $row=mysql_fetch_assoc($sql)) {
	                 echo "<option>".$row['dep_name']."</option>";
}
					 ?>
					
				</select><br /></div>
                <input type="submit" name="submit" id="submit">
		</form>	
 		<style type="text/css">
#ag{
	position: relative;
	top:-30px;
	margin-left: 150px;
	width: 50px;
}
		</style>
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
                <br>
                <br>
                <br>

            </div>
		</div>
		<div class="side-bar">
			<h3>MANAGER</h3>
			<div id='Admin-list'>
			    <ul>
					<li ><a href='Admin D.html'>Add Secretary</a></li>
					<li class="selected-Li"><a href='add Doc.php'>Add Doctor</a></li>
					<li><a href="add test.html">Add TEST</a></li>
					<li><a href="update test.html">UPDATE TEST DATA</a></li>
					<li><a href="generate-pdf.php">Report About People</a></li>
					<li><a href="alltst.php">Report About Tests</a></li>
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