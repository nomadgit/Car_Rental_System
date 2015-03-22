<?php 
 session_start();
 ?>
<html>
<head>
	<title>Get Quote</title>
	<link href="car.css" type="text/css" rel="stylesheet"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="car.js"></script>
	<script src="getQuote.js"></script>
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
				<li class="left"><a href="getQuote1.php" class="optns" id="getQuote">Get Quote</a></li>
				<li class="left"><a href="main.php" class="optns" id="reserve">Rent a Car</a></li>			
			</ul>
	</div>
	<p class="welcome"> Welcome <?php echo $_SESSION['user_name'];?> </p>
		<section class="reg_cont">
		<div class="register">
			<h1>Get Quotation</h1>
				<p class="err" id="error">  </p>
				<form name="quote">
					<ul> 
					<li><label class="labl" for="date">Year:</label></li>  
					<li><input type="date" name="date" value="" placeholder="Year (YYYY-DD-MM)"></li>
					<p id="selects"></p>
					<li><label class="labl" for="button1"></label></li> 
					<li class="submit" id="first"><input id="first" class="mainsub" type="button" name="commit" value="Submit" onclick="getQuote()"></li>
					<li><label class="labl" for="button2"></label></li> 
					<li class="submit" id="second"><input id="second" class="mainsub"  type="button" name="commit" value="Submit" onclick="calculate()"></li>
					<p id="amt"></p>
					</ul>					
				</form>
		</div>

	</section>
	
</body>
</html>


