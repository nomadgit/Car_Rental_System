<?php
session_start();
$a = $_POST['login'];
$b = $_POST['password'];

$hash = hash('sha256', $b);

if (isset($_POST['commit'])) {
	
	$conn = mysqli_connect('localhost:3306','root','root');

	if (!$conn) {
     die('Could not connect: ' . mysqli_error($conn)); 
    }

    mysqli_select_db($conn,"car_rental_system");

	$sql = "SELECT customer_id,first_name FROM customer WHERE email_id = '$a' AND passkey = '$hash'";

	$result = $conn->query($sql);
	// $result = mysqli_query($conn,$sql);
	$row = $result->fetch_assoc();

	if ($result->num_rows == 0){
		session_regenerate_id();
  		$_SESSION['error_msg'] = "User does not exist";
		header("Location:/reserve.php");
		session_write_close();		
		return false;
 	} else {
 		session_regenerate_id();
 		$_SESSION['user_name'] = $row['first_name'];
 		$_SESSION['user_id']   = $row['customer_id'];
  		header('Location:/main.php');
  		session_write_close();
	    return false;
	}
	mysqli_close($conn);
   }
?>