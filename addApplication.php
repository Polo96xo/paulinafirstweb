<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lambay</title>
		<link rel="stylesheet" type="text/css" href="CSS/css.css"/>
    </head>
    <body>
		<h1>Applications list</h1>
        <?php
			$server = "localhost";
			$username = "root";
			$password = "";
			$database = "paulinapryczkowska";
			
			$con = mysqli_connect($server, $username, $password, $database);
			
			$theUserName = $_POST["full_name"];
			$theUserPhone = $_POST["phone"];
			$theUserEmail = $_POST["email_address"];
			$theUserPassword = $_POST["password"];
			$theUserTime = $_POST["time"];
			$theUserDate = $_POST["date"];
			$theUserAccom = $_POST["accommodation_yes"];
			$theUserTypeOfAccom = $_POST["type_acc"];
			$theUserStay = $_POST["amount_days"];
			
			if ($con) {
				$query = "INSERT INTO lambay (user_name, user_phone, user_email, user_pass, user_time, user_date, user_accom, user_typeOfAccom, user_days) VALUES
				('$theUserName', '$theUserPhone ', '$theUserEmail', '$theUserPassword', '$theUserTime', '$theUserDate', '$theUserAccom', '$theUserTypeOfAccom', '$theUserStay')";
				
				mysqli_query($con, $query);
				
				echo "<h3><span>New Application added</span></h3>";
				
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
							
				echo		"<tr>
								<td> $theUserName</td>
								<td> $theUserPhone</td>
								<td> $theUserEmail</td>
								<td> $theUserPassword</td>
								<td> $theUserTime</td>
								<td> $theUserDate</td>
								<td> $theUserAccom</td>
								<td> $theUserTypeOfAccom</td>
								<td> $theUserStay</td>
							</tr>";
							
				echo "</table>";
				
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
