<?php 
 session_start();
 ?>
<html>
<head>
	<title>Employee's Main Page</title>
	<link href="car.css" type="text/css" rel="stylesheet"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
	<script	src="emplmain.js" type="text/javascript"></script>
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
				<li class="trans"><a href="empldriver.php" class="optns" >Update Driver Details</a></li> 
			</ul>
	</div>
	<p class="welcome"> Welcome <?php echo $_SESSION['employee_name'];?> </p>				
	<br>
	<br>
	<section class="reg_cont">
		<div class="register">
			<h1>Update Vehicle details</h1>
				<p class="err" id="error">	
				 	<?php 
				 	   if (isset($_SESSION['message_error'])) {
			 			echo $_SESSION['message_error'];
			 			if ($_SESSION['a'] == "") {
			 			  $_SESSION['a'] = "1";
			 				}				 				 	  	
			 			}

			 			if ($_SESSION['a'] == "2") {
			 	  			unset($_SESSION['message_error']);
			 			} elseif ($_SESSION['a'] == "1") {
			 				$_SESSION['a'] = "2";
			 			}	
  					?>			 
				 </p>
				<form method="post" name='form_reg' action = "emplmain_submit.php" onSubmit="return vehvalid();">
				<ul>  
					<li><label class="labl" for="ID">Vehicle ID:</label></li>  
					<li><input id="fid" type="text" name="id" size="11" /></li>  
					<li><label class="labl" for="model">Model:</label></li>  
					<li><input type="text" name="model" size="20" /></li>  
					<li><label class="labl" for="type">Type:</label></li>  
					<li><input type="text" name="type" size="15" /></li> 
					<li><label class="labl" for="cond">Condition:</label></li>  
					<li><input type="text" name="cond" size="10" /></li> 					
					
					<li><label class="labl" for="seat">Seat Count:</label></li>  
					<li><input type="text" name="seat" size="11" /></li>  
					<li><label class="labl" for="charge">Daily Charge:</label></li>  
					<li><input type="text" name="charge" size="4" /></li>

					<li><label class="labl" for="avail">Availability:</label></li>  
					<li><input type="text" name="avail" size="3" /></li>  
					  
					<li><label class="labl" for="cost">Cost per mile:</label></li>  
					<li><input type="text" name="cost" size="11" /></li>  
					
					<li><label class="labl" for="mile">Mileage: </label></li>
					<li><input type="text" name="mile" size="15" /></li>

					<li><label class="labl" for="Add">Add Vehicle</label></li>
					<li><input type="radio" name="vehicle" id = "Add" value="Add" checked = "checked"></li>

					<li><label class="labl" for="Delete">Delete Vehicle</label></li>
					<li><input type="radio" name="vehicle" id = "Delete" value="Delete"></li>
					<br>
					<li><input class="mainsub" type="submit" name="submit" value="Update Vehicle" /></li>
				</ul>
					
				</form>
				<p class="rule"> Note: To delete a vehicle from the database it is enough to mention the Vehicle ID alone.To add Vehicle all details are mandatory</p>
		</div>
	</section>
	
	
</body>
</html>