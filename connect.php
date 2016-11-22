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

$sql= "SELECT Item_Name, Color, Quantity, Aisle_Location FROM inventory_table";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       
        echo "Item Name and Color: " . $row["Item_Name"]. " " . $row["Color"]. "<br>";
        echo "Quantity: " . $row["Quantity"]. "<br>";
        echo "Aisle Location: " . $row["Aisle_Location"]."<br><hr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>