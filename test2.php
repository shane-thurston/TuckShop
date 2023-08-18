<!DOCTYPE html>
<html>
	<head>
		<title>Testing PHP</title>
	</head>
	
	<body>
		<p>Testing database connection</p>
		<?php
			$servername = "fdb28.awardspace.net";
			$username = "4259529_shaneshop";
			$password = "#########";
			$dbname = "4259529_shaneshop";
			
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
