<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<title>Lambay Island</title>
		<link rel="stylesheet" type="text/css" href="CSS/css.css">
        <title>Lambay Island</title>
    </head>
    <body>
	<h1>Applications list</h1>
		<h3>Delete Booking</h3>
		<br />
        <?php
			$server = "localhost";
			$username = "root";
			$password = "";
			$database = "paulinapryczkowska";
			
			$con = mysqli_connect($server, $username, $password, $database);
			
			$deleteThisBooking = $_POST["deleteBooking"];
			
			if ($con) {
				$query = "SELECT * FROM lambay where userName = '$deleteThisBooking'";
				$result = mysqli_query($con, $query);
				
				$delete = "DELETE FROM lambay where userName = '$deleteThisBooking'";
				
				echo	"<table border='1'>
							<tr>
								<th>Name</th>
								<th>Telephone</th>
								<th>Email</th>
								<th>Password</th>
								<th>Time</th>
								<th>Date</th>
								<th>Accommodation</th>
								<th>Type of accommodation</th>
								<th>How many days</th>
							</tr>";
							
				while ($db_field = mysqli_fetch_assoc($result)) {
					echo	"<tr>";
					echo		 "<td>" . $db_field['user_name'] . "</td>";
					echo		 "<td>" . $db_field['user_phone'] . "</td>";
					echo		 "<td>" . $db_field['user_email'] . "</td>";
					echo		 "<td>" . $db_field['user_pass'] . "</td>";
					echo		 "<td>" . $db_field['user_time'] . "</td>";
					echo		 "<td>" . $db_field['user_date'] . "</td>";
					echo		 "<td>" . $db_field['user_accom'] . "</td>";
					echo		 "<td>" . $db_field['user_typeOfAccom'] . "</td>";
					echo		 "<td>" . $db_field['user_days'] . "</td>";
				}
				echo "</table>";
				
				mysqli_query($con, $delete);
				
				echo "<p>\n\nRecord has been deleted successfully</p>";
				mysqli_close($con);
			} else {
				print "Error: Unable to find Database";
				mysqli_close($con);
			}
        ?>
		<br/>
		<button onclick="window.location.href='addTrip.html'">Back to form</button>
		<br/>
    </body>
</html>

