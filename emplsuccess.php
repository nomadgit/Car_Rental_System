<?php 
 session_start();
 ?>
<html>
<head>
	<title>Success</title>
	<link href="car.css" type="text/css" rel="stylesheet"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<div class="top"> 
		<img class ="myimage" src="rent.jpg" alt="name" >
		<p class="phone"> CONTACT: 999-999-9999 </p>
	</div>
	
	<div>
			<ul class="options">
				<li class="left"><a href="home.html" class="optns">Home</a></li>
				<li class="left"><a href="service.html" class="optns" >Services</a></li> 
				<li class="left"><a href="FAQ.html" class="optns" >FAQ</a></li> 
				<li class="left"><a href="contact.html" class="optns" >Contact</a></li>
				<li class="left"><a href="logout.php" class="optns" >LogOut</a></li>
			</ul>
	</div>
	<p class="welcome"> Welcome <?php echo $_SESSION['employee_name'];?> </p>
	<section class="reg_cont">
		<p id = "crass">Data Updated successfully.Please click on the below link to navigate to the main page.<br>
		<div class="register">			
				<a id = "brad" href="emplmain.php">Main Page</a></p>
		</div>
	</section>
	
	
</body>
</html>
