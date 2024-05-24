<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Game ZoneX:About</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php include 'includes/header_menu.php'; ?>
  
  <div class="container-fluid mt-5 px-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 mt-3">
        <h3 class="text-danger pt-3 title">About Us</h3>
        <hr />
        <img src="./img/about.png" class="img-fluid d-block rounded mx-auto" style="width: 100%; max-width: 800px;">
        <p class="mt-4">Welcome to Game ZoneX, your ultimate destination for all things gaming in the heart of Kandy! Established with a passion for the gaming community, we are dedicated to bringing you the latest and greatest in computer accessories to enhance your gaming experience.</p>
        <p class="mt-4"><h2 text-start-100  >Our Products</h2>We pride ourselves on our carefully curated selection of computer accessories. Whether you're looking for top-tier gaming mice, mechanical keyboards, high-resolution monitors, or state-of-the-art graphics cards, we've got you covered. Our shelves are stocked with products from leading brands in the gaming industry, ensuring that you have access to the best tools to conquer your gaming challenges.</p?>
      <p>
        <h2>Why Choose Us?</h2>
          <ul>
            <li>Expertise: Our team consists of gaming enthusiasts who understand your needs and can provide personalized recommendations.</li>
            <li>Quality: We only stock products from reputable brands known for their performance and durability.</li>
            <li>Customer Service: Your satisfaction is our priority. We offer exceptional customer service to help you find exactly what you need.</li>
          </ul>
        <p>
          <h2>Contact Us</h2>
          Feel free to reach out to us with any questions or for more information about our products and services. Follow us on social media for the latest updates, promotions, and gaming news.


        </p>
      </p>
      </div>
    </div>
  </div>

  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">
    <form class="col-md-12" action="https://formspree.io/f/mdoqvwaj" method="POST" name="_next">
      <h3 class="text-danger pt-3 title mx-auto">Contact Form</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email" name="email">
      </div>
      <div class="form-group">
        <label for="FormControlTextarea1">Message</label>
        <textarea class="form-control" id="FormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-danger">Submit</button>
    </form>
  </div>

  <!--footer -->
  <?php include 'includes/footer.php'; ?>
  <!--footer end-->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
      $('[data-toggle="popover"]').popover();
    });
    $(document).ready(function () {
      if (window.location.href.indexOf('#login') != -1) {
        $('#login').modal('show');
      }
    });
  </script>
  <?php if (isset($_GET['error'])) { $z = $_GET['error']; echo "<script type='text/javascript'>
    $(document).ready(function(){
    $('#signup').modal('show');
    });
    </script>"; echo "
    <script type='text/javascript'>alert('" . $z . "')</script>";} ?>
  <?php if (isset($_GET['errorl'])) { $z = $_GET['errorl']; echo "<script type='text/javascript'>
    $(document).ready(function(){
    $('#login').modal('show');
    });
    </script>"; echo "
    <script type='text/javascript'>alert('" . $z . "')</script>";} ?>
</body>
</html>
