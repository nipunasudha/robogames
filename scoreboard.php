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
        
      </ul>
    
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<div class="row-content scoreboard">
<table>
  
  <tr class="heading">
    <td class='col-robot'>Robot</td>
    <td>Team Name</td>
    <td colspan=2>Round 1</td>
    <td colspan=2>Round 2</td>
    <td colspan=2>Round 3</td>
    <td>Rank</td>
  </tr>
 
  

<?php
$dir = "./teams";
// Open a directory, and read its contents
foreach(glob($dir.'/*.*') as $file) {
echo "<tr><td class='col-robot'>";


//	echo "<img class='robo-img' src='".$file."'>";
echo "<div class='robo-img' style=\"background-image:url('".$file."')\"></div>";
echo "</td><td>";
echo $file;
echo "</td><td class='col-attempts'>2 Attempts</td>
<td class='col-time'>01:05:04</td>
<td class='col-attempts'>3 Attempts</td>
<td class='col-time'>01:05:04</td>
<td class='col-attempts'>1 Attempts</td>
<td class='col-time'>01:05:04</td>
<td class='col-rank'>6</td></tr>";
}




?>





</table>
</div>
</div>

    </body>
</html>