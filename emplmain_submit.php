<?php
session_start();
$m = $_POST['id'];
$n = $_POST['model'];
$o = $_POST['type'];
$p = $_POST['cond'];
$q = $_POST['seat'];
$r = $_POST['charge'];
$s = $_POST['avail'];
$t = $_POST['cost'];
$u = $_POST['mile'];
$w = $_POST['vehicle'];
$x = $_SESSION['employee_id'];
$today = date("Y-m-d");
$erlocation = "/emplmain.php";
$sclocation = "/emplsuccess.php";

if (isset($_POST['submit'])) {
  $con = mysqli_connect('localhost:3306','root','root');

  if (!$con) {
   die('Could not connect: ' . mysqli_error($con));
  }

  mysqli_select_db($con,"car_rental_system");
  $sql1 = "SELECT vehicle_id FROM vehicle WHERE vehicle_id = '$m'";
  $result = $con->query($sql1);

  if ($result->num_rows > 0){
    if ($w == "Add") {
      session_regenerate_id();
      $_SESSION['message_error'] = "Vehicle ID already exists";
      header("Location:$erlocation");
      return false;
    } elseif ($w == "Delete") {
      $sql = "DELETE FROM vehicle WHERE vehicle_id = '$m'";
      if ($con->query($sql) === TRUE) {
          mysqli_commit($con);
          $sql2 = "DELETE FROM vehicle_maintenance WHERE vehicle_fk_id = '$m' AND employee_fk_id = '$x'";
          if ($con->query($sql2) === FALSE) {
             session_regenerate_id();
             $_SESSION['message_error'] = "Error: " . $sql2 . "<br>" . $con->error;
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
          $_SESSION['message_error'] = "Error: " . $sql . "<br>" . $con->error;
          header("Location:$erlocation");
          return false;
       }
    }
     
  } else { 
    if ($w == "Add") {
      $sql = "INSERT INTO vehicle VALUES ('$m','$n','$o','$p','$q','$r','$s','$t','$u')";      
      if ($con->query($sql) === TRUE) {
         mysqli_commit($con);
         $sql2 = "INSERT INTO vehicle_maintenance VALUES ('$x','$m','$today')";
         if ($con->query($sql2) === FALSE) {
             session_regenerate_id();
             $_SESSION['message_error'] = "Error: " . $sql2 . "<br>" . $con->error;
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
          $_SESSION['message_error'] = "Error: " . $sql . "<br>" . $con->error;
          header("Location:$erlocation");
          return false;
      } 
    } elseif ($w == "Delete") {
      session_regenerate_id();
      $_SESSION['message_error'] = "Vehicle ID does not exist";
      header("Location:$erlocation");
      return false;
    }
      
    }
  mysqli_close($con);
 }
?>