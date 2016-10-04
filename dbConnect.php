<?php
$servername = "localhost";
$username = "root";
$password = null;
$dbName = "robogames";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
//$time = new \DateTime();
//$time = $time->format('H:m:s');
////$sql = "INSERT INTO team_time (time_record)
////VALUES ('$time')";
//
//if ($conn->query("INSERT INTO `team_time` (`time_record`) VALUES ('$time')") === TRUE) {
//    echo "Table MyGuests created successfully";
//} else {
//    echo "Error creating table: " . $conn->error;
//}
//
//$conn->close();
?>