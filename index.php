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
      <li  class="active"><a href="index.php">Home</a></li>
        <li><a href="stopwatch.php">Stopwatch</a></li>
        <li><a href="scoreboard.php">Score Board</a></li>
        
      </ul>
    
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container">
<div class="row-content">
<img class='eva' src="./img/eva.png" alt="">
<img class='mount' src="./img/mountains.png" alt="">
</div>
</div>



<script>
$(function() {
    resize_all()
})
$(window).on('resize', resize_all)


function resize_all() {
    $('.eva').fadeIn(3000).height($(window).height()-100)
    setMargins()
        
}
function setMargins() {
    width = $(window).width();
    containerWidth = $(".eva").width();  
    leftMargin = (width-containerWidth)/2;    
    $(".eva").css("left", leftMargin);    
}


</script>




    </body>
</html>