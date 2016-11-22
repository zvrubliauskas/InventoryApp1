<?php
$servername = "us-cdbr-azure-central-a.cloudapp.net";
$username = "bd731ce7cc045b";
$password = "2c604e07";
$dbname = "acsm_2dfbee11f8ab07b";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


  // Connect to MySQL
 				$mysqli = new mysqli( $servername, $username, $password, $dbname );

               $Name = (isset($_POST['Name'])    ? $_POST['Item_Name']   : '');
               $Email = (isset($_POST['Email'])    ? $_POST['Email']   : '');
               $Feedback = (isset($_POST['Feedback'])    ? $_POST['Feedback']   : '');
               



			  // Insert our data
			  $sql = "INSERT INTO feedback_table ( Name, Email, Feedback) 	VALUES ( '{$mysqli->real_escape_string(isset($_POST['Name'])    ? $_POST['Name']   : '')}' , '{$mysqli->real_escape_string(isset($_POST['Email'])    ? $_POST['Email']   : '')}'	, '{$mysqli->real_escape_string(isset($_POST['Feedback'])    ? $_POST['Feedback']   : '')}'	)";


			  $insert = $mysqli->query($sql);

			  // Print response from MySQL
			  // Print response from MySQL
			  if ( $insert ) {
				echo "Success! Row ID: {$mysqli->insert_id}";
			  } else {
				die("Error: {$mysqli->errno} : {$mysqli->error}");
			  }

				


            ?>