<?php
session_start();
?>
<html>
<head>
	<title>Rent a car</title>
	<link href="car.css" type="text/css" rel="stylesheet"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
	<script	src="register.js" type="text/javascript"></script>
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
				<li class="left"><a href="" class="optns" >Get Quote</a></li>
				<li class="left"><a href="reserve.html" class="optns" >Reserve a Car</a></li>
			</ul>
	</div>
	
	
	<section class="reg_cont">
		<div class="register">
			<h1>New User Registration</h1>
				 <p class="err" id="error">	
				 	<?php 
				 	   if (isset($_SESSION['errormsg'])) {
			 			echo $_SESSION['errormsg'];
			 			if ($_SESSION['a'] == "") {
			 			  $_SESSION['a'] = "1";
			 				}				 				 	  	
			 			}

			 			if ($_SESSION['a'] == "2") {
			 	  			unset($_SESSION['errormsg']);
			 			} elseif ($_SESSION['a'] == "1") {
			 				$_SESSION['a'] = "2";
			 			}	
  					?>			 
				 </p>
				 <form method="post" action = "customer_submit.php" name='form_reg' onSubmit="return validate();">
				 <ul>
				  <li><label class="labl" for="fname">First Name:</label></li>  
					<li><input id="fid" type="text" name="fname" size="25" /></li>  
					<li><label class="labl" for="lname">last Name:</label></li>  
					<li><input type="text" name="lname" size="25" /></li>  
					<li><label class="labl" for="phno">Mobile:</label></li>  
					<li><input type="text" name="phno" size="12" /></li>  
					<li><label class="labl" for="city">City:</label></li>  
					<li><input type="text" name="city" size="25" /></li>  
					<li><label class="labl" for="address">Address:</label></li>  
					<li><input type="text" name="address" size="50" /></li>  
					<li><label class="labl" for="state">State:</label></li>  
					<li><input type="text" name="state" size="3" /></li>  
					<li><label class="labl" for="zip">ZIP Code:</label></li>  
					<li><input type="text" name="zip" size="6" /></li>  
					<li><label class="labl" for="Nationality">Nationality:</label></li>  
					<li><input type="text" name="nationality" /></li>  
					<li><label class="labl" for="country">Country:</label></li>  
					<li><select name="country">  
						<option selected="" value="Default">(Please select a country)</option>  
							<option value="AF">Australia</option>  
							<option value="AL">Canada</option>  
							<option value="DZ">India</option>  
							<option value="AS">Russia</option>  
							<option value="AD">USA</option>  
					</select></li> 					
					<li><label class="labl" for="email">E-mail ID:</label></li>  
					<li><input type="text" name="emailid" size="30" /></li> 
					<li><label class="labl" for="passid">Password:</label></li>  
					<li><input type="password" name="passid" size="12" /></li>
					<li><label class="labl" for="repassid">Re-enter Password:</label></li>  
					<li><input type="password" name="repassid" size="12" /></li>
					<li><input class="sub" type="submit" name="submit" value="Create Account" /></li> 	
						
				</ul>
				</form>				 			
								
				<p class="rule"> Note: Passwords should have a minimum length of 8 characters and should have at least a lower case letter, an upper case letter,
								special characters ? and ! followed by a number</p>
		</div>
	</section>			
</body>
</html>
