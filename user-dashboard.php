<?php session_start(); ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title><?php if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
      echo "Dashboard || ".$_SESSION['login']; 
        }
        else{
          echo "Error";
        }
        ?>
      </title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="user-dashboard">

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
            <form action="index-profile.php" method="post">
            <input type="submit" name="logout" class="btn" value="LOGOUT">
            </form>
      </div>
    </div>
  </div>
</div>
<!-- top information -->


<!-- navbar start-->
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


<div class="dashboard">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="text-center">Hello <?php echo $_SESSION['login']; ?></h4>
      </div>
      <h4 class="text-center">Your Bookings:</h4>
      <hr>
        <div class="row">
        <div class="col-4">
       <?php 

      while($row=$personal_detail_result->fetch_assoc()){
      $phone_no = $row['phone_no'];
      $hour = $row['hour'];
      $day_night = $row['day_night'];
      $add = $row['additional'];
      $country = $row['country'];
      $city = $row['city'];
      $state = $row['state'];
      $zip_code = $row['zip_code'];
      $payment = $row['payment'];
       ?>
      <table>
        <tr><td>Phone No:</td><td><?php echo "$phone_no"; ?></td></tr>
        <tr><td>Arriving Time</td><td><?php echo "$hour&nbsp;$day_night"; ?></td></tr>
        <tr><td>Additional Requirements:</td><td><?php echo "$add"; ?></td></tr>
        <tr><td>City:</td><td><?php echo "$city"; ?></td></tr>
        <tr><td>Payment:</td><td><?php echo "$payment"; ?></td></tr>
      </table>
      <?php }
        ?>
      </div>
      <div class="col-4">
       <?php 

      while($row=$booking_result->fetch_assoc()){
      $check_in_day = $row['check_in_day'];
      $check_in_month = $row['check_in_month'];
      $check_in_year = $row['check_in_year'];
      $check_out_day = $row['check_out_day'];
      $check_out_month = $row['check_out_month'];
      $check_out_year = $row['check_out_year'];
      $no_children = $row['no_children']; 
      $no_male = $row['no_male']; 
      $no_female = $row['no_female'];
      $no_persons = $no_children+$no_male+$no_female;
      $total_rooms_booked = $row['total_rooms_booked'];
      $booking_date = $row['booking_date'];
       ?>
      <table>
        <tr><td>Check in:</td><td><?php echo "$check_in_day-$check_in_month-$check_in_year"; ?></td></tr>
        <tr><td>Check out:</td><td><?php echo "$check_out_day-$check_out_month-$check_out_year"; ?></td></tr>
        <tr><td>Total Persons:</td><td><?php echo "$no_persons"; ?></td></tr>
        <tr><td>Total Rooms:</td><td><?php echo "$total_rooms_booked"; ?></td></tr>
        <tr><td>Booking Date:</td><td><?php echo "$booking_date"; ?></td></tr>
      </table>
      
      <?php }
        ?>
      </div>
      <div class="col-4">
       <?php 

      while($row=$room_price_result->fetch_assoc()){
      $total_price = $row['total_price'];
       ?>
      <table>
        <tr><td>Total Price:</td><td><?php echo "$$total_price"; ?></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
      </table>
  

      <?php }
        ?>
      </div>
    </div>
  </div>
</div>  

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