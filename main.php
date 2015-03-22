<?php 
 session_start();
 ?>
 <html>
<head>
	<title>Rent a car</title>
	<link href="car.css" type="text/css" rel="stylesheet"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
	<script	src="main.js">	</script>
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
				<li class="left"><a href="getQuote1.php" class="optns" >Get Quote</a></li>
				<li class="left"><a href="logout.php" class="optns" >LogOut</a></li>
			</ul>
	</div>
	<br>
	<hr>
	<div>	
			
			
	</div>
	
	<p class="welcome"> Welcome <?php echo $_SESSION['user_name'];?> </p>
	
	<section class="reg_cont">
		<div class="register">
			<h1>Rent a CAR</h1>
				<p class="err" id="error"> 
				<?php 
			 		if (isset($_SESSION['errmessage'])) {
			 			echo $_SESSION['errmessage'];
			 			if ($_SESSION['a'] == "") {
			 			  $_SESSION['a'] = "1";
			 				}				 				 	  	
			 			}

			 			if ($_SESSION['a'] == "2") {
			 	  			unset($_SESSION['errmessage']);
			 			} elseif ($_SESSION['a'] == "1") {
			 				$_SESSION['a'] = "2";
			 			}
				?>
				</p>
				<form method="post" name='form_reg' action="ins_cus.php" onSubmit="return addUser();">
				<ul>		
					<li><label class="labl" for="ID">Reservation ID:</label></li>  
					<li><input id="fid" type="text" name="id" size="11" /></li>
					
					<li><label class="labl" for="Delete">Cancel Reservation</label></li>
					<li><input type="radio" name="reservation" id = "delete" value="delete"></li> 		
					<br><br><br><br>
					<hr>					
					<li><label class="labl" for="Delete">View Reservation</label></li>
					<li><input type="radio" name="reservation" id = "view" value="view"></li> 		
					<br><br>
					<hr>					
					<li><label class="labl" for="Delete">E-mail ID</label></li>
					<li><input type="text" name="email" id = "eml" ></li> 		
					
					<li><label class="labl" for="source">Source:</label></li>  
					<li><select name="source">  
							<option selected="" value="Default">(Please select a Source)</option>  
							<option value="Ajax Park">Ajax Park</option>  
							<option value="Arthur Ashe Stadium">Arthur Ashe Stadium</option>  
							<option value="Benjamin Plaque">Benjamin Plaque</option>  
							<option value="DEF Terminals">DEF Terminals</option>  
							<option value="Edward Labs">Edward Labs</option>  
							<option value="Faraday Museum">Faraday Museum</option>  
							<option value="Forest Lane">Forest Lane</option>  
							<option value="Gloucestershire Bells">Gloucestershire Bells</option>  
							<option value="Grapevine Valley">Grapevine Valley</option>  
							<option value="Independent Plainview">Independent Plainview</option>  
							<option value="JF Station">JF Station</option>  
							<option value="Markson Junction">Markson Junction</option>  
							<option value="Pear Corporation">Pear Corporation</option>  
							<option value="Plankton Bridge">Plankton Bridge</option>  
							<option value="Ramsay Creek">Ramsay Creek</option>  
							<option value="Redmayne Apartments">Redmayne Apartments</option>  
							<option value="Redmont Street">Redmont Street</option>  
							<option value="Riverdale Statue">Riverdale Statue</option>  
							<option value="Terryville Crevasse">Terryville Crevasse</option>  
							<option value="Wellington House">Wellington House</option>  
							<option value="Westminster Creek">Westminster Creek</option>  
					</select></li> 
					<li><label class="labl" for="dest">Destination:</label></li>  
					<li><select name="dest">  
						<option selected="" value="Default">(Please select a Destination)</option>  
						<option value="Ajax Park">Ajax Park</option>  
							<option value="Arthur Ashe Stadium">Arthur Ashe Stadium</option>  
							<option value="Benjamin Plaque">Benjamin Plaque</option>  
							<option value="DEF Terminals">DEF Terminals</option>  
							<option value="Edward Labs">Edward Labs</option>  
							<option value="Faraday Museum">Faraday Museum</option>  
							<option value="Forest Lane">Forest Lane</option>  
							<option value="Gloucestershire Bells">Gloucestershire Bells</option>  
							<option value="Grapevine Valley">Grapevine Valley</option>  
							<option value="Independent Plainview">Independent Plainview</option>  
							<option value="JF Station">JF Station</option>  
							<option value="Markson Junction">Markson Junction</option>  
							<option value="Pear Corporation">Pear Corporation</option>  
							<option value="Plankton Bridge">Plankton Bridge</option>  
							<option value="Ramsay Creek">Ramsay Creek</option>  
							<option value="Redmayne Apartments">Redmayne Apartments</option>  
							<option value="Redmont Street">Redmont Street</option>  
							<option value="Riverdale Statue">Riverdale Statue</option>  
							<option value="Terryville Crevasse">Terryville Crevasse</option>  
							<option value="Wellington House">Wellington House</option>  
							<option value="Westminster Creek">Westminster Creek</option>     
					</select></li> 
					<li><label class="labl"  for="fdate">From Date:</label></li>  
					<li><input  type="date" name="fdate" size="10" /></li>  
					<li><label class="labl" for="tdate">To Date:</label></li>  
					<li><input  type="date" name="tdate" size="10" /></li>  
					<li><label class="labl" for="check"> I Need a Driver: </label></li>
					<li><input  name="check" type="checkbox" id="myCheck"></li>
					<li><label class="labl" for="model">Car Model:</label></li>  
					<li><select name="model">  
						<option selected="" value="Default">(Please select a Model)</option>  
							<option value="honda">Honda CRV</option>  
							<option value="fordr">Ford Fortuner</option>  
							<option value="benz">Benz Class S</option>  
							<option value="lim">Limousine A</option>  
							<option value="volks">Volks Beetle</option>  
							<option value="ford">Ford Fiesta</option>  
							<option value="ham">Hummer H2</option>  
							<option value="chev">Chevrolet Scala</option>  
							<option value="nissan">Nissan Micra</option>  
							<option value="toyota">Toyota Camry</option>  
					</select></li> 
					<li><label class="labl" for="ctype">Car Type:</label></li>  					
					<li><select name="ctype">  
						<option selected="" value="Default">(Please select a Car Type)</option>  
							<option value="suv">SUV</option>  
							<option value="luv">LUV</option>  
							<option value="sedan">SEDAN</option>  
						</select></li>
					<li><label class="labl" for="rent">Make Reservation</label></li>
					<li><input type="radio" name="reservation" id = "Add" value="Add" checked = "checked"></li>

								
					
					<br>
				<li><input class="mainsub" type="submit" name="submit" value="Perform Operation" /></li>
				</ul>
			</form>
			<div class ="tbl" id="hst"> </div>
		</div>
		
	</section>
	
</body>
</html>