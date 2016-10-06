<?php
include("dbConnect.php");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">

        <script src="./bower_components/jquery/dist/jquery.min.js"></script>
        <script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet">
    </head>
    <body>
     




<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="./img/logo.png" alt="" class="logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
        <li><a href="stopwatch.php">Stopwatch</a></li>
        <li   class="active"><a href="scoreboard.php">Score Board</a></li>
        <li><a href="enter.php">Enter Data</a></li>
        
      </ul>
    
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<div class="row-content scoreboard">
<img class='mount' src="./img/mountains.png" alt="">
<table>
  
  <tr class="heading">
    <td class='col-robot'>Robot</td>
    <td>Team Name</td>
    <td>Highest Score Attempt</td>
    <td>Current Round Score</td>
    <td>Rank</td>
  </tr>
 
  

<?php
$dir = "./teams";
// Open a directory, and read its contents
foreach(glob($dir.'/*.*') as $file) {
echo "<tr><td class='col-robot'>";


//	echo "<img class='robo-img' src='".$file."'>";
echo "<div class='robo-img' style=\"background-image:url('".$file."')\"></div>";
echo "</td><td class='col-team'>";
echo 'Robo Name';
echo "</td><td class='col-attempt'>Attempt-2</td>
<td class='col-score'>500</td>
<td class='col-rank'>6</td></tr>";
}




?>






</table>
    <?php
    $sql = "SELECT name, attempt, hardwareMarks, testMarks, timingMarks, (hardwareMarks+testMarks+timingMarks) AS total FROM score ORDER BY total DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $rank=1;
        while($row = $result->fetch_assoc()) {

            echo "record_time: " . $row["name"]."   ".$row["total"]."   ".$rank."<br>";
            $rank++;
            
        }
        echo 'done!';
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>
</div>

    </body>
</html>