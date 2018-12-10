<?php

//$startdate =$_POST["startdate"];
//$enddate = $_POST["enddate"];

$startdate ="2018-05-05";
$enddate = "2018-05-09";

header('Content-Type: application/json');

$url=file_get_contents("https://api.nasa.gov/neo/rest/v1/feed?start_date={$startdate}&end_date={$enddate}&api_key=t24wnzBt8LHLX3TYbJyHWsoyZ3qWVXlzyCwMLGDp");



$asteroid = json_decode($url,true);
	
	 $arrayast= array($asteroid["near_earth_objects"]);

$data=array();
				foreach ($arrayast as $key => $value) {
					
					foreach ($value as $key1 => $value1) {
					

						$data[]=$key1=>$value1;	
						

						
						
					}


						
					}
					}
					
				
				


//print_r($data);
print_r(json_encode($data));
?>