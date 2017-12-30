<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Hotel Reservation</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="index-page">

<!-- database_core file -->
<?php require_once('db/user_database.php'); ?>


<!-- top information -->
<div class="top-inf">
  <div class="container">
    <div class="row">
      <div class="col-4 text-center">
        <p><img src="img/address.png" alt="" class="img-icon">Tevairoa, Bora Bora Island</p>
      </div>
      <div class="col-4 col-offset-4 text-center">
        <p><img src="img/phone.png" alt="" class="img-icon">Contact No: 9843672756</p>
      </div>
      <div class="login_register">
        <a href="login.php" class="btn">LOGIN</a>
        <a href="register.php" class="btn">REGISTER</a>
      </div>
    </div>
  </div>
</div>

<!-- navbar end-->

<?php include('inc/header.php'); ?>

<!-- banner start -->
<div class="banner">
  <div class="container">
    <div class="row">
    <div class="card booking-box col-8 col-offset-2">
        <div class="text-center booking-text">
        <h3>Any Time Worldwide</h3>
        <h2>BOOK YOUR IDEAL ROOM</h2>
        <a href="login.php" class="btn" style="margin-top:50px;">BOOK NOW</a>
        </div>
      
    </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- description start -->
<div class="description">
  <div class="container">
    <div class="row">
      <div class="col-6 col-offset-3 text-center">
        <h4>Welcome to</h4>
        <h2>LUXURY BEST HOTEL</h2>
      </div>
      <div class="col-10 text-center col-offset-1">
        <p>A charming ocean front hotel and resort with <?php echo $total_rooms ?> hotel rooms, and suites, most with balcony and jacuzzi, located directly on the Turquoise water of the South Pacific Ocean. Paradise Hotel and Resort offers you the opportunity to relax and enjoy a wonderful beachside Pacific vacation in beautiful Bora Bora Island.</p>
        <p>Start the day relaxing by the ocean under our palm trees, as you enjoy our complimentary newspaper. Also be sure to enjoy a nice swim in our heated 50,000 gallon fresh water pool or walk on our expansive beach. Want to enjoy something unique? Join the snorklers and divers exploring our most revered treasure, hiking and the three natural living coral reefs that are just 100 yards off-shore. The Paradise Hotel and Resort is the premier hotel for this rare and beautiful natural wonder.</p>
      </div>
    </div>
  </div>
</div>

<!-- services -->
<div class="services">
  <div class="container">
    <div class="row">
      <div class="col-3 text-center">
        <h4>Lets Go And Surrender To A</h4>
        <h2>LUXURIOUS</h2>
        <h3>Services</h3>
      </div>
      <div class="images">
      <div class="col-3">
        <a class="card service" href="#">
          <div class="image">
          <img src="img/rooms1.jpg" alt="">
          </div>
          <div class="text text-center">
            <p>Luxury Rooms</p>
          </div>
        </a>
      </div>
      <div class="col-3">
        <a class="card service" href="#">
          <div class="image">
          <img src="img/restaurant1.jpg" alt="">
          </div>
          <div class="text text-center">
            <p>Restaurant</p>
          </div>
        </a>
      </div>
      <div class="col-3">
        <a class="card service" href="#">
          <div class="image">
          <img src="img/trekking.jpg" alt="">
          </div>
          <div class="text text-center">
            <p>Tours</p>
          </div>
        </a>
      </div>
    </div>
    </div>
  </div>
</div>

<!-- contact -->
<?php include('inc/footer.php'); ?>
<!-- footer end -->
       
</body>
</html>

















