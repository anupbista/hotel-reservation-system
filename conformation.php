<?php session_start(); ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title><?php echo $_SESSION['login']; ?></title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="index-page index-profile">

<!-- database_core file -->
<?php require_once('db/user_database.php');

if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
 ?>
<!-- top information -->
<div class="top-inf">
  <div class="container">
    <div class="row">
      <div class="col-4 text-center">
        <p><img src="img/address.png" alt="" class="img-icon">Tevairoa, Bora Bora Island</p>
      </div>
      <div class="col-4 text-center">
          <h3>Welcome <?php echo $_SESSION['login']; ?></h3>
      </div>
      <div class="col-4 text-center">
        <p><img src="img/phone.png" alt="" class="img-icon">Contact No: 9843672756</p>
      </div>
      <div class="login_register">
            <a href="user-dashboard.php" class="btn">DASHBOARD</a>
            <form action="index-profile.php" method="post">
            <input type="submit" name="logout" class="btn" value="LOGOUT">
            </form>
      </div>
    </div>
  </div>
</div>
<!-- top information -->


<!-- navbar start-->
<nav>
  <div class="container">
  <div class="row">
    <a class="navbar-brand" href="index-profile.php"><img src="img/paradise-small.png" alt="Paradise Hotel & Resort"></a>
    <ul class="navbar-right">
      <li class="index-link"><a href="index-profile.php">Home</a></li>
      <li class="rooms-link"><a href="rooms.php">Rooms</a></li>
      <li class="restaurant-link"><a href="#">Restaurant</a></li>
      <li class="gallery-link"><a href="#">Gallery</a></li>
      <li class="contact-link"><a href="#">Contact</a></li>
    </ul>
 </div><!-- /.container -->
 </div>
</nav>
<!-- navbar end-->


<!-- banner start -->
<div class="banner">
  <div class="container">
    <div class="row">
    <div class="card booking-box col-8 col-offset-2 text-center">
        <h4>Thank You for choosing us.</h4>
        <form action="conformation.php" method="post">
        <div class="col-6 col-offset-3">
          <input type="submit" name="conform_submit" value="GO TO DASHBOARD" class="btn">
          </div>
        </form>
    </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- contact -->
<?php include('inc/footer.php'); ?>
<!-- footer end -->
  <?php } 
else{
    echo "<div class=\"text-center\" style=\"margin-top: 200px;font-size:20px;\"> You must be logged in to continue || <a href=\"login.php\">LOGIN</a></div>"; 
}


  ?>     
</body>
</html>

















