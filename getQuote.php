<?php
$q = mysql_real_escape_string($_GET['date']);
$con = mysqli_connect('localhost:3306','root','root','car_rental_system');
if (!$con)
{die('Could not connect: ' . mysqli_error($con));}
mysqli_select_db($con,"ajax_demo");
$sql="SELECT vehicle_id, model FROM vehicle WHERE vehicle_id not in (SELECT vehicle_fk_id FROM rent_reservation WHERE from_date <='".$q."' and due_date >='".$q."')";

$result = mysqli_query($con,$sql);
echo "<li><label class='labl' for='vehicle'>Vehicles:</label></li>  ";
echo "<select name='vehicle'><option value=''>Select</option>";
while ($row = $result->fetch_assoc()) {
	echo "<option value=". $row['vehicle_id'] . ">". $row['model'] ."</option>";
    }
echo "</select>";

$sql1 ="select * from source_data";

$result1 = mysqli_query($con,$sql1);

echo "<li><label class='labl' for='src'>Source:</label></li>";
echo "<select name='source' id='src'><option value=''>Select</option>";
while ($row = $result1->fetch_assoc()) {
	echo "<option value='". $row['source'] . "'>". $row['source'] ."</option>";
    }
 echo "</select>";   

$sql2 ="select * from source_data";

$result2 = mysqli_query($con,$sql2);

echo "<li><label class='labl' for='dest'>Destination:</label></li>";
echo "<select name='destination' id='dest'><option value=''>Select</option>";
while ($row = $result2->fetch_assoc()) {
	echo "<option value='". $row['source'] . "'>". $row['source'] ."</option>";
    }
 echo "</select>";   
 

mysqli_close($con);

?> 