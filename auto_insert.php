<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="1">
</head>
<body>
	<?php 

	require('db_connect.php');

	$FirstArray = array("Sterilization","CIP","Production","Load Cell Tank 1","Load Cell Tank 2");
	foreach($FirstArray as $index => $value) {
		// echo $FirstArray[$index];
		// echo "<br/>";
		for ($y = 1; $y <= 8; $y++) {
			$id_sensor      = $FirstArray[$index];
			$channel     	= $y;
			$analog_read	= rand(300,1000);
			$note           = "sensor ". $FirstArray[$index] . " channel ". $y ;
			//test print
			// echo "INSERT INTO `fyp` (`id_sensor`, `channel`, `value`, `note`) VALUES ('$id_sensor', '$channel', '$analog_read', '$note') <br>";
			mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
			$sql = "INSERT INTO `fyp` (`id_sensor`, `channel`, `analog_read`, `note`) VALUES ('$id_sensor', '$channel', '$analog_read', '$note')";
			$result = mysqli_query($conn, $sql);
			if($result) {
				// echo "Data inserted successfully <br>";
			}
			else {
				// echo "Data not inserted <br>";
			}
		}
	}
	// $sql = "INSERT INTO fyp(humidity, temperature, smoke, sound) VALUES($humidity, '$temperature', '$smoke', '$sound')";
	
	
	// echo "<br>";
	// }

	


	?>

	<h1>My Website</h1>
	<p>Some text...</p>

</body>
</html>

