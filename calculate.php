<?php
$src = mysql_real_escape_string($_GET['src']);
$dest = mysql_real_escape_string($_GET['dest']);
$vehicle = intval($_GET['vehicle']);

$con = mysqli_connect('localhost:3306','root','root','car_rental_system');
if (!$con)
{die('Could not connect: ' . mysqli_error($con));}
mysqli_select_db($con,"ajax_demo");
$sql="SELECT * from vehicle where vehicle_id ='".$vehicle."'";
echo $src;
echo $dest;

$result = mysqli_query($con,$sql);

if($result->num_rows > 0){
	$row = $result->fetch_assoc();
	$dailyCharge = $row['daily_charge'];
}

$sql1 ="select * from source_data where source='".$src."'";

$result1 = mysqli_query($con,$sql1);
$miles1 = 0;
$miles2 = 0;
if($result1->num_rows > 0){
	$row = $result1->fetch_assoc();
	$miles1 = $row['distance'];
}

$sql2 ="select * from source_data where source='".$dest."'";

$result2 = mysqli_query($con,$sql2);

if($result2->num_rows > 0){
	$row = $result2->fetch_assoc();
	$miles2 = $row['distance'];
}

  
$total_amount = $dailyCharge*3;
echo "<li><label class='labl4' for='Final'>The total amount will be ".$total_amount."</label></li>";


mysqli_close($con);

?>