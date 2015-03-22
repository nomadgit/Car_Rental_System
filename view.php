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
			<h1>View Details</h1>
				<p class="err" id="error"> 
				<?php 
			 	   $con = mysqli_connect('localhost:3306','root','root');
					 if (!$con) 
  					  {
   						die('Could not connect: ' . mysqli_error($con));
  					  }
  					  mysqli_select_db($con,"car_rental_system");
  					  $x = $_SESSION['user_id'];
			 		  $sqlv = "SELECT reservation_id,status,reserved_date from rent_reservation WHERE customer_fk_id = '$x'";
					  $result= $con->query($sqlv);	
					  if ($result->num_rows > 0)
						{
						  session_regenerate_id();
						  echo "<table border='1'>
					 	  <tr>
				    	   <th style ='color: white'>Reservation ID</th>
				    	   <th style ='color: white'>Status</th>
					       <th style ='color: white'>Reserved Date</th>
					      </tr>";
							while ($view =  $result->fetch_assoc()) 
							{
								echo "<tr>";							
								echo "<td style ='color: white'>" .$view['reservation_id']. "</td>";
								echo "<td style ='color: white'>" .$view['status'].  "</td>";
								echo  "<td style ='color: white'>". $view['reserved_date'].  "</td>";
								echo "</tr>";
							}
					      echo "</table>";	  
						  session_write_close();		
						  mysqli_close($con);
						  return false;
					 	} 
					 	 else {
					 	   $_SESSION['errmessage'] = "Error: " . $sqlv . "<br>" . $con->error; 	  
					       header("Location:/main.php");
					       session_write_close();    
					       mysqli_close($con);
					       return false;
					 	}
				?>
				</p>
				<br>
				<a href="main.php" class="optns">BACK</a></li>
		</div>
	</section>
</body>
</html>