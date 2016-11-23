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


               $fname = (isset($_POST['fname'])    ? $_POST['fname']   : '');
               $lname = (isset($_POST['lname'])    ? $_POST['lname']   : '');
               $email = (isset($_POST['address'])    ? $_POST['email']   : '');
               $comments = (isset($_POST['comments'])    ? $_POST['comments']   : '');



			  // Insert our data
			  $sql = "INSERT INTO activity_table ( fname, lname, email, comments) 	VALUES ( '{$mysqli->real_escape_string(isset($_POST['fname'])    ? $_POST['fname']   : '')}' , '{$mysqli->real_escape_string(isset($_POST['lname'])    ? $_POST['lname']   : '')}'	, '{$mysqli->real_escape_string(isset($_POST['email'])    ? $_POST['email']   : '')}' 	, '{$mysqli->real_escape_string(isset($_POST['comments'])    ? $_POST['comments']   : '')}'	)";


			  $insert = $mysqli->query($sql);

			  // Print response from MySQL
			  if ( $insert ) {
				echo "Success! Row ID: {$mysqli->insert_id}";
			  } else {
				die("Error: {$mysqli->errno} : {$mysqli->error}");
			  }


            ?>