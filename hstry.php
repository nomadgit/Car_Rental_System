<?php
$user = intval($_GET['user_val']);
$hostname ="localhost";
$password="";
$username="root";
$dbname="car_rental_system";
$val = "NA";


$con = new mysqli($hostname,$username,$password,$dbname);
if (!$con) 
{
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT reservation_id,from_date,return_date FROM rent_reservation WHERE customer_fk_id = '".$user."'";

$result = mysqli_query($con,$sql);

$num_rows=mysql_affected_rows($result);

if($num_rows > 0)
{
echo "<table>";


while($row = mysqli_fetch_array($result)) 
{
  echo "<tr>";
  echo "<td>" . $row['reservation_id'] . "</td>";
  echo "[BRK]";
  echo "<td>" . $row['from_date'] . "</td>";
  echo "[BRK]";
  echo "<td>" . $row['return_date'] . "</td>";
  echo "</tr> ";
  
}
echo "</table>";
}
else
{
	echo "<table>"
	echo "<tr>";
	echo "<td>" .$val. "</td>";
	echo "[BRK]";
	echo "<td>" .$val. "</td>";
	echo "[BRK]";
	echo "<td>" .$val. "</td>";
	echo "</tr> ";
	echo"</table>"
}

mysqli_close($con);
?>
