<?php
header('Content-Type: application/json');

$conn=mysqli_connect('localhost','root','','asteroid');

$sqlQuery = "SELECT sr_no,std_name,numb FROM players ORDER BY sr_no";

$result = mysqli_query($conn,$sqlQuery);


$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

print_r( json_encode($data));
?>