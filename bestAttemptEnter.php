<?php
include ('dbConnect.php');
?>

<!DOCTYPE html>
    <html>
<head>
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

    <script>
        $(document).ready(function(){
            $('#submit').click(function () {
                var name = $('#team').val();
                var attemptTxt = $('#attempt').val();
                var hardwareMarks = $('#hardware-marks').val();
                var testMarks = $('#test-marks').val();
                var timeMarks = $('#time-marks').val();

                if( name =='notSelected' || attemptTxt=='noAttempt' || hardwareMarks=='' || testMarks == '' || timeMarks == '' ){
                    alert('Enter marks for a complete attempt');
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
                            alert(resultData);
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

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="form-group select-box">
                <label for="team-selector">Current Team</label>
                <select class="form-control" name="team-" id="team">
                    <option value="notSelected">select a team</option>
                    <?php
                    $dir = "./teams";
                    // Open a directory, and read its contents
                    foreach(glob($dir.'/*.*') as $file) {

                        echo "<option value='".$file."'>".$file."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group select-box">
                <label for="attempt">Attempt</label>
                <select class="form-control" name="attempt" id="attempt">
                    <option value="noAttempt">Select attempt</option>
                    <option value="attempt-1">attempt-1</option>
                    <option value="attempt-2">attempt-2</option>
                    <option value="attempt-3">attempt-3</option>
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




</body>
</html>