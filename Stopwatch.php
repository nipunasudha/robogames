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
        <li><a href="enter.php">Enter Data</a></li>

                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row-content">

<img class='mount' src="./img/mountains.png" alt="">

            <div class="stopwatch">

                <div>

                   
                        <div class="counter">
                           <!-- <span class='digits' id="sw_h">00</span>: -->
                            <span class='digits' id="sw_m">00</span>:<span class='digits' id="sw_s">00</span>:<span class='digits' id="sw_ms">00</span>
                        </div>


                        <input class="btn btn-primary btn-lg" type="button" value="Start" id="sw_start" />
                        <input class="btn btn-primary btn-lg" type="button" value="Pause" id="sw_pause" />
                        <input class="btn btn-primary btn-lg" type="button" value="Stop" id="sw_stop" />
                        <input class="btn btn-primary btn-lg" type="button" value="Reset" id="sw_reset" />
                        <input class="btn btn-primary btn-lg" type="button" value="View" id="sw_save" style="display:none;"/>
                        <br/>
                        <br/>
                        <span id="sw_status">Timer Standby</span>
                    </div>



                </div>



            </div>
        </div>



<!-- Button trigger modal
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Attempt Finished</h4>
      </div>
      <div class="modal-body">
        <h1 class='counter-value'>-</h1>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


        <script src="./js/app.js"></script>
</body>

</html>