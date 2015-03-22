<?php 
 session_start();
 ?>
<html>
<head>
	<title>Rent a car</title>
	<meta http-equiv="refresh" content="600; url=reserve.php">
	<link href="car.css" type="text/css" rel="stylesheet"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="reserve.js"></script>
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
				<li class="left"><a href="reserve.php" class="optns" >Reserve a Car</a></li>
			</ul>
	</div>
	
	
	<section class="container">
		<div class="login">			
			<h1>User Login</h1>
			 <p class="err" id="error">
			 	<?php if (isset($_SESSION['scmsg'])) {
			 		unset($_SESSION['error_msg']);
			 		echo $_SESSION['scmsg'];
			 		if ($_SESSION['a'] == "") {
			 			  $_SESSION['a'] = "1";
			 		}
			 	}
			 	if (isset($_SESSION['error_msg'])) {
			 		unset($_SESSION['scmsg']);
			 		echo $_SESSION['error_msg'];
			 		if ($_SESSION['a'] == "") {
			 			  $_SESSION['a'] = "1";
			 			}				 				 	  	
			 	}			 	
			 	if ($_SESSION['a'] == "2") {
			 	  session_destroy();
			 	} elseif ($_SESSION['a'] == "1") {
			 		$_SESSION['a'] = "2";
			 	}
				?>
			 </br></br>
			 </p>
				<form method = "post" action = "customer_signsubmit.php" name='reg_form' onSubmit="return validation();">
					<p><input type="text" name="login" value="" placeholder="Username or Email"></p>
					<p><input type="password" name="password" value="" placeholder="Password"></p>
					<p class="submit"><input type="submit" name="commit" value="Login"></p>					
				</form>
		</div>
			
		<div class="login-help">
				<p>New user? <a href="register.php">Click here to register</a>.</p>
		</div>
	</section>
	
	
	
	
	
	
</body>
</html>