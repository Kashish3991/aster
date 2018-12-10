<?php
extract($_POST);
//header('Content-Type: application/json');

$url=file_get_contents("https://api.nasa.gov/neo/rest/v1/feed?start_date=2015-09-06&end_date=2015-09-09&api_key=t24wnzBt8LHLX3TYbJyHWsoyZ3qWVXlzyCwMLGDp");

error_reporting(1);
$asteroid = json_decode($url,true);
	date_default_timezone_set('UTC');
	 $arrayast= array($asteroid["near_earth_objects"]);

				foreach ($arrayast as $key => $value) {
					
					
					foreach ($value as $key1 => $value1) {
						
						
					
						foreach ($value1 as $key2 => $value2) {
							
							foreach ($value2 as $key3 => $value3){
								$data[]= $key1;
								//$data[].= $key3;
								//$data[]=$key1;
								
//print json_encode($data)."<br>";
								//echo $key3. "has a value" .$value3."<br>";
						
								}
					
						
					}
					}
					
				}
				



	

print_r($data);

//print_r($countast);

?>