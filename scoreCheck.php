<?php
include("dbConnect.php");

$name = $_POST['name'];
//$name='./teams/Gladiators.JPG';
$sql = "SELECT * FROM score WHERE name ='$name' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $arr = array('attempt'=>$row['attempt'],'hardware'=>$row['hardwareMarks'],'test'=>$row['testMarks'],'timing'=>$row['timingMarks']);
    echo json_encode($arr);

}
else {
    $result = $conn->query("INSERT INTO score (name) VALUES ('$name')");
    $sql = "SELECT * FROM score WHERE name ='$name' LIMIT 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $arr = array('attempt' => $row['attempt'], 'hardware' => $row['hardwareMarks'], 'test' => $row['testMarks'], 'timing' => $row['timingMarks']);
        echo json_encode($arr);
    }

}
$conn->close();
?>

