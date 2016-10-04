<?php
include("dbConnect.php");

$time = $_POST['time'];


if ($conn->query("INSERT INTO `team_time` (`record_time`) VALUES ('$time')") === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();