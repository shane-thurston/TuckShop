<!DOCTYPE html>
<html>
	<head>
		<title>Testing PHP</title>
	</head>
	
	<body>
		<p>Testing database connection</p>
		<?php
			$servername = "#######";
			$username = "########";
			$password = "#########";
			$dbname = "########";
			
			//Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			//Check connection
			if ($conn->connect_error) {
				//Display the error and exit
				die("Connection failed: ". $conn->connect_error);
			}
			else {
				//Display this text
				echo "Connection made";
			}
			//Close connection
			$conn->close();
		?>
	</body>
</html>
