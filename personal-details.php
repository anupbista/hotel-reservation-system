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
    <div class="card booking-box col-8 col-offset-2">
        <div class="text-center booking-text">
        <h3>Any Time Worldwide</h3>
        <h2>BOOK YOUR IDEAL ROOM</h2>
        </div>
      <form action="personal-details.php" method="post">
          <div class="row">
            <div class="col-12">
              <div class="booking-details">
                <h4>Your booking details:</h4>
                <table>
                  <tr>
                    <td>Check in:</td>
                    <td><?php echo "$check_in_day_db-$check_in_month_db-$check_in_year_db"; ?></td>
                  </tr>
                  <tr>
                    <td>Check out:</td>
                    <td><?php echo "$check_out_day_db-$check_out_month_db-$check_out_year_db"; ?></td>
                  </tr>
                  <tr>
                    <td>Rooms:</td>
                    <td><?php echo "$total_rooms_booked_db"; ?></td>
                  </tr>
                  <tr>
                    <td>Price:</td>
                    <td><?php echo "$ $total_price_db"; ?></td>
                    </tr>
                </table><br>
                <h4>Personal Details:</h4><br>
                <div>
                  <div class="row">
                  <div class="col-12">
                    <h3 class="required text-center"><?php echo $alert["personal_details"]; ?></h3>                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <label for="phone">Phone No:</label><br>
                    <input type="text" name="phone">
                  </div>
                  <div class="col-6">
                    <label for="arrival_time">Arrival Time:</label><br>
                    <div class="col-4">
                    <select name="hour">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>:
                    </select>
                    </div>
                    <div class="col-4">
                      <select name="day_night">
                        <option value="A.M">A.M</option>
                        <option value="P.M">P.M</option>
                      </select>
                    </div>
                  </div>
                    <div class="col-12">
                     <label for="additional">Additional Requirements:</label><br>
                     <textarea name="additional" cols="30" rows="4"></textarea>
                    </div>
                    </div>
                  <h4>Billing Address:</h4><br>
                  <div class="row">
                    <div class="col-6">
                      <label for="country">Country:</label>
                      <input type="text" name="country">
                  </div>
                  <div class="col-6">
                      <label for="city">City:</label>
                      <input type="text" name="city">
                  </div>
                  <div class="col-6">
                      <label for="state">State:</label>
                      <input type="text" name="state">
                  </div>
                  <div class="col-6">
                      <label for="zip_code">Zip Code:</label>
                      <input type="text" name="zip_code">
                  </div>
                </div>    
                  <h4>Payment Method:</h4><br>
                  <div class="row">
                    <div class="col-12">
                      <select name="payment">
                        <option value="Paypal">Paypal</option>
                        <option value="esewa">esewa</option>
                        <option value="Mastercard">Mastercard</option>
                      </select>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4 col-offset-4">
             <input type="submit" name="personal_details_submit" value="Next" class="btn">
        </div>
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

















