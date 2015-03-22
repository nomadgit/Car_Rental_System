<?php 
 session_start();
 ?>
<html>
<head>
	<title>Driver Detail Update Page</title>
	<link href="car.css" type="text/css" rel="stylesheet"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
	<script	src="empldriver.js" type="text/javascript"></script>
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
	<br>
	<hr>
	<div>				
			<ul class="options">
				<li class="trans"><a href="emplmain.php" class="optns" >Update Vehicle Details</a></li> 
			</ul>
	</div>
	<p class="welcome"> Welcome <?php echo $_SESSION['employee_name'];?> </p>	
	<br>
	<br>
	<section class="reg_cont">
		<div class="register">
			<h1>Update Driver details</h1>
				<p class="err" id="error">	
				 	<?php 
				 	   if (isset($_SESSION['mess_error'])) {
			 			echo $_SESSION['mess_error'];
			 			if ($_SESSION['a'] == "") {
			 			  $_SESSION['a'] = "1";
			 				}				 				 	  	
			 			}

			 			if ($_SESSION['a'] == "2") {
			 	  			unset($_SESSION['mess_error']);
			 			} elseif ($_SESSION['a'] == "1") {
			 				$_SESSION['a'] = "2";
			 			}	
  					?>			 
				 </p>
				<form method="post" name='form_reg' action = "empldriver_submit.php" onSubmit="return drivervalid();">
				<ul>  
					<li><label class="labl" for="ID">Driver ID:</label></li>  
					<li><input id="fid" type="text" name="id" size="11" /></li>  
					<li><label class="labl" for="name">Name:</label></li>  
					<li><input type="text" name="name" size="25" /></li>  
					<li><label class="labl" for="nation">Nationality:</label></li>  
					<li><input type="text" name="nation" size="15" /></li> 
					<li><label class="labl" for="mob">Mobile_No:</label></li>  
					<li><input type="text" name="mob" size="10" /></li>
					<li><label class="labl" for="adrs">Address:</label></li>  
					<li><input type="text" name="adrs" size="45" /></li>

					<li><label class="labl" for="Add">Add Driver</label></li>
					<li><input type="radio" name="driver" id = "Add" value="Add" checked = "checked"></li>

					<li><label class="labl" for="Delete">Delete Driver</label></li>
					<li><input type="radio" name="driver" id = "Delete" value="Delete"></li>
					<br>
					<li><input class="mainsub" type="submit" name="submit" value="Update Vehicle" /></li>
				</ul>
					
				</form>
				<p class="rule"> Note: To delete a Driver from the database it is enough to mention the Driver ID alone.To add a new driver all details are mandatory</p>
		</div>
	</section>
	
	
</body>
</html>