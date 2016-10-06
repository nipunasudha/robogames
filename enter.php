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
        <li  ><a href="scoreboard.php">Score Board</a></li>
        <li  class="active"><a href="enter.php">Enter Data</a></li>
        
      </ul>
    
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<div class="row enter">
<h3 class='error-msg'>Entry incomplete!</h3>
<img class='mount' src="./img/mountains.png" alt="">
 <div class="col-md-7">
            <div class="form-group select-box">
                <label for="team-selector">Current Team</label>
                <select class="form-control" name="team-" id="team">
                    <option value="notSelected">Select team</option>
                    <?php
                    $dir = "./teams";
                    // Open a directory, and read its contents
                    foreach(glob($dir.'/*.*') as $file) {
$k=str_ireplace('./Teams/','',$file);
$k=str_ireplace('.jpg','',$k);

                        echo "<option value='".$k."'>".$k."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group select-box">
                <label for="attempt">Attempt</label>
                <select class="form-control" name="attempt" id="attempt">
                    <option value="noAttempt">Select attempt</option>
                    <option value="attempt-1">Attempt-1</option>
                    <option value="attempt-2">Attempt-2</option>
                    <option value="attempt-3">Attempt-3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="hardware-marks">Hardware Marks</label>
                <input type="number" class="form-control" name="hardware-marks" id="hardware-marks">
            </div>

            <div class="form-group">
                <label for="test-case-marks">Test Case Marks</label>
                <input type="number" class="form-control" name="test-case-marks" id="test-marks">
            </div>

            <div class="form-group">
                <label for="time-marks">Timing Marks</label>
                <input type="number" class="form-control" name="time-marks" id="time-marks">
            </div>

            <div class="form-group">
                <button class="btn btn-success" id="submit">Add Attempt</button>
            </div>

        </div>
   
</div>
</div>








<script>
        $(document).ready(function(){
            $('#submit').click(function () {
                var name = $('#team').val();
                var attemptTxt = $('#attempt').val();
                var hardwareMarks = $('#hardware-marks').val();
                var testMarks = $('#test-marks').val();
                var timeMarks = $('#time-marks').val();

                if( name =='notSelected' || attemptTxt=='noAttempt' || hardwareMarks=='' || testMarks == '' || timeMarks == '' ){
                  $('#myModalLabel').text('Warning!')
                    $('#alert').modal('show')
                    $('.modal-body').text('Input is incomplete!')
                    $('.enter').addClass('error')
                }
                else{
                    $.ajax({
                        type: "POST",
                        url: "scoreAdd.php",
                        data: {
                            name:name,
                            attempt : attemptTxt,
                            hardwareMarks: hardwareMarks,
                            testMarks:testMarks,
                            timeMarks: timeMarks
                        },
                        success: function (resultData) {
                            //alert(resultData);
                             $('#myModalLabel').text('Done!')
                    $('#alert').modal('show')
                    $('.modal-body').text('Entry successfully submitted.')
                    $('.enter').removeClass('error')
//                            console.log(resultData);
//                            var resultData = $.parseJSON(resultData);
//                            console.log(resultData);
//                            $('#attempt').val(resultData.attempt);
//                            $('#hardware-marks').val(resultData.hardware);
//                            $('#test-marks').val(resultData.test);
//                            $('#time-marks').val(resultData.timing);
                        }
                    });
                }
            });

            $('#team').on('change', function() {

                if(this.value!='notSelected'){
                    var attemptTxt = $('#attempt').val();
                    var hardwareMarks = $('#hardware-marks').val();
                    var testMarks = $('#test-marks').val();
                    var timeMarks = $('#time-marks').val();

                    $.ajax({
                        type: "POST",
                        url: "scoreCheck.php",
                        data: {
                            name: this.value
                        },
                        success: function (resultData) {
                            console.log(resultData);
                            var resultData = $.parseJSON(resultData);
                            console.log(resultData);
                            $('#attempt').val(resultData.attempt);
                            $('#hardware-marks').val(resultData.hardware);
                            $('#test-marks').val(resultData.test);
                            $('#time-marks').val(resultData.timing);
                        }
                    });
                }
                else{
                    console.log( this.value );

                }
            });
        });
    </script>

    <!-- Small modal -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
        
      </div>
    </div>
  </div>
</div>
</div>
    </body>
</html>