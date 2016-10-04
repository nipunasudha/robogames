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
                    <li class="active"><a href="stopwatch.php">Stopwatch</a></li>
                    <li><a href="scoreboard.php">Score Board</a></li>

                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row-content">


            <div class="stopwatch">

                <div>

                    <div class="form-group select-box">
                        <label for="team-selector">Current Team</label>
                        <select class="form-control" name="" id="#team-selector">
  </div>



   
   

<?php
$dir = "./teams";
// Open a directory, and read its contents
foreach(glob($dir.'/*.*') as $file) {

	echo "<option value='".$file."'>".$file."</option>";

}




?>



    </select>
                        <div class="counter">
                           <!-- <span class='digits' id="sw_h">00</span>: -->
                            <span class='digits' id="sw_m">00</span>:
                            <span class='digits' id="sw_s">00</span>:
                            <span class='digits' id="sw_ms">00</span>
                        </div>


                        <input class="btn btn-primary btn-lg" type="button" value="Start" id="sw_start" />
                        <input class="btn btn-primary btn-lg" type="button" value="Pause" id="sw_pause" />
                        <input class="btn btn-primary btn-lg" type="button" value="Stop & Save" id="sw_stop" />
                        <input class="btn btn-primary btn-lg" type="button" value="Reset" id="sw_reset" />
                        <br/>
                        <br/>
                        <span id="sw_status">Timer Standby</span>
                    </div>



                </div>



            </div>
        </div>






        <script src="./js/app.js"></script>
</body>

</html>