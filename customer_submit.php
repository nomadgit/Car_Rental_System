<?php
session_start();
$m ="";
$n = $_POST['fname'];
$o = $_POST['lname'];
$p = $_POST['phno'];
$q = $_POST['city'];
$r = $_POST['address'];
$s = $_POST['state'];
$t = $_POST['zip'];
$u = $_POST['nationality'];
$v = $_POST['country'];
$w = $_POST['emailid'];
$x = $_POST['passid'];
$erlocation = "/register.php";
$sclocation = "/reserve.php";

$hash = hash('sha256', $x);

if (isset($_POST['submit'])) {
  $con = mysqli_connect('localhost:3306','root','root');

  if (!$con) {
   die('Could not connect: ' . mysqli_error($con));
  }

  mysqli_select_db($con,"car_rental_system");
  $sql1 = "SELECT email_id FROM customer WHERE email_id = '$w'";
  $result = $con->query($sql1);

  if ($result->num_rows > 0){
     session_regenerate_id();
     $_SESSION['errormsg'] = "Email ID already exists";
	   header("Location:$erlocation");
	   return false;
  } else { 
      $sql = "INSERT INTO customer VALUES ('$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$hash')";
      if ($con->query($sql) === TRUE) {
          session_regenerate_id();
   	      $_SESSION['scmsg'] = "User added successfully. Please Sign In";
	        header("Location:$sclocation");
	        return false;
       } else {
          session_regenerate_id();
          $_SESSION['errormsg'] = "Error: " . $sql . "<br>" . $con->error;
          header("Location:$erlocation");
          return false;
       }
    }
  mysqli_close($con);
 }


?>