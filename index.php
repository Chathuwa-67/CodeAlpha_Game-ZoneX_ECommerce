<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game ZoneX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-bottom:200px;font-family: 'Reggae One'">
    <!--Header-->
    <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
    <!--Header ends-->
    <div id="content">
        <div id="bg" class=" ">
            <div class="container" style="padding-top:150px">
            <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 3rem;" >
            <h1>Welcome to Game ZoneX in Kandy!🎮</h1>
            <p>Your Exclusive Game Shop - Newly Opened and Ready to Level Up Your Gaming Experience! </p>
            <a href="products.php" style="background-color:rgba(74, 66, 68, 0.7)" class="btn btn-warning btn-lg text-white">Shop Now</a>

            </div>
            </div>

        </div>
    </div>
   
    <div class="text-center pt-4 h3 ">
    🕹️ Say Hello to Your Gaming Passion Today!🕹️
    </div>
   
    
    <!--menu  start-->
      <div class="container pt-3 ">
        <div class="row text-center ">
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#casing"> <img src="./img/gaming_pc_set.jpg" class="img-fluid " alt="" style="border-radius:0.5rem">
               
                    <div class="h5 pt-3 font-weight-bolder">
                      Gaming Casing
                   </div>
                 </a>
             </div>
            <div class="col-6 col-md-3 py-3 " >
                <a href="products.php#monitors"  >
                  <img src="./img/Gaming_monitor_set.jpg" class="img-fluid zoom" alt="" style="border-radius:0.5rem" >
                     <div class="h5 pt-3 font-weight-bolder">
                     Monitors
                     </div>
                  </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#vga">
                 <img src="./img/Gaming_vga_set.webp" class="img-fluid   " alt="" style="border-radius:0.5rem">
                <div class="h5 pt-3 font-weight-bolder">
                Graphic Cards
                 </div>
             </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#console">
                 <img src="./img/console_set.webp" class="img-fluid  " alt="" style="border-radius:0.5rem">
                 <div class="h5 pt-3 font-weight-bolder">
                 Console & Handheld Gaming
                 </div>
              </div>
            </a>
        </div>
     </div>
    

    <!--menu  end-->
    <!--footer -->
    <?php include 'includes/footer.php'?>
    <!--footer end-->


    

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>




</html>