<?php
session_start();

$email_d = $_POST['email'];
$rdate  = date("Y-m-d");
$rtndate = $_POST['fdate'];
$src    = $_POST['source'];
$dest   = $_POST['dest'];
$fdat   = $_POST['fdate'];
$tdat   = $_POST['tdate'];
$durdate = $_POST['tdate'];
$stat   = "Booked";
$expens = 100;
$w = $_POST['reservation'];
$cus_id	=$_SESSION['user_id'];
$fdate = date("Y-m-d");

$hostname ="localhost";
$password="root";
$username="root";
$dbname="car_rental_system";

if (isset($_POST['submit'])) 
{
 $con = mysqli_connect('localhost:3306','root','root');

  if (!$con) 
  {
   die('Could not connect: ' . mysqli_error($con));
  }

  mysqli_select_db($con,"car_rental_system");
  
  if ($w == "Add") 
  {
	$sql1 = "SELECT CUSTOMER_ID FROM CUSTOMER WHERE EMAIL_ID = '$email_d'";
	$cust_id= $con->query($sql1);
	
	if ($cust_id->num_rows == 0)
	{
		session_regenerate_id();
  		$_SESSION['errmessage'] = "Please enter valid E-mail ID";
		header("Location:/main.php");
		session_write_close();		
		return false;
 	} 
	else
	{
	$sqlins="INSERT INTO rent_reservation (reservation_date, expenditure, status, source, destination, reserved_date, from_date, return_date, due_date, customer_fk_id) 
     VALUES('$fdate', '$expens', '$stat', '$src', '$dest', '$fdat', '$fdat', '$tdat', '$tdat', '$cus_id' )";
    
   if ($con->query($sqlins) === TRUE) 
    {
          session_regenerate_id();
          $_SESSION['errmessage'] = "Car Has Been booked successfully. If driver service is availed, driver details will be notified 1 hour before journey";
        header("Location:/main.php");
        return false;
    }
     else
       {
        session_regenerate_id();
      	$_SESSION['errmessage'] = "Error: " . $sqlins . "<br>" . $con->error;
    	header("Location:/main.php");
    	session_write_close();    
    	return false;
       }
	}
  }

 else if($w == "delete")
  {
	$rsrvid = $_POST['id'];
	$ustat = "Cancelled";
	$sqlu = "UPDATE rent_reservation SET status = '$ustat' WHERE reservation_id = '$rsrvid' ";
	if ($con->query($sqlu) === TRUE) 
		{
		  $con->autocommit(TRUE);		
          session_regenerate_id();
   	      $_SESSION['errmessage'] = "Cancellation is done successfully";	
	      header("Location:/main.php");
	      return false;
       }
  
  }
  
  else   if($w == "view")
  {	
	$sqlv = "SELECT reservation_id,status,reserved_date from rent_reservation WHERE customer_fk_id = '$cus_id'";
	$result= $con->query($sqlv);	
	if ($result->num_rows > 0)
	{
	  session_regenerate_id();
  	  header("Location:/view.php");
	  session_write_close();	
	  mysqli_close($con);	
	  return false;
 	} else {
 	   $_SESSION['errmessage'] = "Error: " . $sqlv . "<br>" . $con->error; 	  
       header("Location:/main.php");
       session_write_close();    
       return false;
 	}
  
  }
  
 mysqli_close($con);
}

?>
