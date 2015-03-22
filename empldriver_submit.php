<?php
session_start();
$m = $_POST['id'];
$n = $_POST['name'];
$o = $_POST['nation'];
$p = $_POST['mob'];
$q = $_POST['adrs'];
$w = $_POST['driver'];
$x = $_SESSION['employee_id'];
$today = date("Y-m-d");
$erlocation = "/empldriver.php";
$sclocation = "/emplsuccess.php";

if (isset($_POST['submit'])) {
  $con = mysqli_connect('localhost:3306','root','root');

  if (!$con) {
   die('Could not connect: ' . mysqli_error($con));
  }

  mysqli_select_db($con,"car_rental_system");
  $sql1 = "SELECT driver_id FROM driver WHERE driver_id = '$m'";
  $result = $con->query($sql1);

  if ($result->num_rows > 0){
    if ($w == "Add") {
      session_regenerate_id();
      $_SESSION['mess_error'] = "Driver ID already exists";
      header("Location:$erlocation");
      return false;
    } elseif ($w == "Delete") {
      $sql2 = "DELETE FROM driver_maintenance WHERE driver_fk_id = '$m' AND employee_fk_id = '$x'";      
      if ($con->query($sql2) === TRUE) {
          mysqli_commit($con);
          $sql = "DELETE FROM driver WHERE driver_id = '$m'";
          if ($con->query($sql) === FALSE) {
             session_regenerate_id();
             $_SESSION['mess_error'] = "Error: " . $sql2 . "<br>" . $con->error;
             header("Location:$erlocation");
             return false;
           } else {
            mysqli_commit($con);
            session_regenerate_id();
            header("Location:$sclocation");
            return false;
           }
       } else {
          session_regenerate_id();
          $_SESSION['mess_error'] = "Error: " . $sql . "<br>" . $con->error;
          header("Location:$erlocation");
          return false;
       }
    }
     
  } else { 
    if ($w == "Add") {
      $sql = "INSERT INTO driver VALUES ('$m','$n','$o','$p','$q')";
      if ($con->query($sql) === TRUE) {
         mysqli_commit($con);
         $sql2 = "INSERT INTO driver_maintenance VALUES ('$x','$m','$today')";
         if ($con->query($sql2) === FALSE) {
             session_regenerate_id();
             $_SESSION['mess_error'] = "Error: " . $sql2 . "<br>" . $con->error.$today.$x;
             header("Location:$erlocation");
             return false;
           } else {
            mysqli_commit($con);
            session_regenerate_id();
            header("Location:$sclocation");
            return false;
           }          
       } else {
          session_regenerate_id();
          $_SESSION['mess_error'] = "Error: " . $sql . "<br>" . $con->error;
          header("Location:$erlocation");
          return false;
      } 
    } elseif ($w == "Delete") {
      session_regenerate_id();
      $_SESSION['mess_error'] = "Driver ID does not exist";
      header("Location:$erlocation");
      return false;
    }
      
    }
  mysqli_close($con);
 }


?>