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

               $ItemName = (isset($_POST['ItemName'])    ? $_POST['ItemName']   : '');
               $Quantity = (isset($_POST['Quantity'])    ? $_POST['Quantity']   : '');
               $Color = (isset($_POST['Color'])    ? $_POST['Color']   : '');
               $Location = (isset($_POST['Location'])    ? $_POST['Location']   : '');



			  // Insert our data
			  $sql = "INSERT INTO inventory_table ( Item_Name, Quantity, Color, Location) 	VALUES ( '{$mysqli->real_escape_string(isset($_POST['ItemName'])    ? $_POST['ItemName']   : '')}' , '{$mysqli->real_escape_string(isset($_POST['Quantity'])    ? $_POST['Quantity']   : '')}'	, '{$mysqli->real_escape_string(isset($_POST['Color'])    ? $_POST['Color']   : '')}' 	, '{$mysqli->real_escape_string(isset($_POST['Location'])    ? $_POST['Location']   : '')}'	)";


			  $insert = $mysqli->query($sql);

			  // Print response from MySQL
			  if ( $insert ) {
				echo "Success! Row ID: {$mysqli->insert_id}";
			  } else {
				die("Error: {$mysqli->errno} : {$mysqli->error}");
			  }


            ?>