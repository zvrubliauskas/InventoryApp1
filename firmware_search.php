<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>


<div data-role="page" data-theme="b">

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

$sql= "SELECT firmware_version.Firmware_Version, inventory_table.Item_Name 
FROM firmware_version
INNER JOIN inventory_table
ON firmware_version.Item_Name=inventory_table.Item_Name;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       
        echo "Item Name: " . $row["Item_Name"]. "<br>";
        echo "Firmware Version: " . $row["Firmware_Version"]. "<br>";
       
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
  
  	<div data-role="footer" data-theme="b">
	  <h4>Zvrubliauskas &copy; 2016</h4>
	</div>
</div>

</body>
</html>