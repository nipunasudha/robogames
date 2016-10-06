<?php
include("dbConnect.php");

$name = $_POST['name'];
$attempt = $_POST['attempt'];
$hardware = $_POST['hardwareMarks'];
$test = $_POST['testMarks'];
$timing = $_POST['timeMarks'];

$sql = "UPDATE score
SET attempt='$attempt',hardwareMarks='$hardware',testMarks='$test',timingMarks='$timing'
WHERE name='$name'";

$result = $conn->query($sql);

echo "Attempt was successfully added";