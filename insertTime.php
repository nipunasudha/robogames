<?php
include("dbConnect.php");

$time = $_POST['time'];
$team = $_POST['team'];
$round = $_POST['round'];
$attempt = $_POST['attempt'];


if ($conn->query("INSERT INTO team_time (record_time,team,round,attempt) VALUES ('$time','$team','$round','$attempt')") === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();


// if ($conn->query("INSERT INTO `team_time` (`record_time`) VALUES ('$time')") === TRUE) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

// $conn->close();







?>