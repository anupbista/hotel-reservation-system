<?php session_start(); ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>
     <?php if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
      echo $_SESSION['login'];
      }
      else{
        echo "Error";
        }?>
     </title>
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
            <a href="user-dashboard.php" class="btn" name="dashboard">DASHBOARD</a>
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
        <h3 class="required"><?php echo $alert_booking["user_booking_details"]; ?></h3>
        </div>
      <form action="index-profile.php" method="post">
          <div class="row">
          <div class="col-6 check-in">
          <label for="check-in">Check In:</label><br>
            <div class="col-4">
              <select name="check-in_day">
                <option value="<?php echo date("d") ?>"><?php echo date("d") ?></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select> 
            </div>
            <div class="col-4">
              <select name="check-in_month" value="">
                <option value="<?php echo date("M") ?>"><?php echo date("M") ?></option>
                <option value="Jan">Jan</option>
                <option value="Feb">Feb</option>
                <option value="Mar">Mar</option>
                <option value="Apr">Apr</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="Aug">Aug</option>
                <option value="Sep">Sep</option>
                <option value="Oct">Oct</option>
                <option value="Nov">Nov</option>
                <option value="Dec">Dec</option>
              </select>
            </div>
             <div class="col-4">
             <select name="check-in_year">
                 <option value="<?php echo date("Y"); ?>"><?php echo date("Y"); ?></option>
                 <option value="<?php echo date("Y")+1; ?>"><?php echo date("Y")+1; ?></option>
             </select>
            </div>
          </div>
           <div class="col-6 check-out">
          <label for="check-out">Check Out:</label><br>
            <div class="col-4">
              <select name="check-out_day">
                <option value="<?php echo date("d") ?>"><?php echo date("d") ?></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select> 
            </div>
            <div class="col-4">
              <select name="check-out_month" value="">
                <option value="<?php echo date("M") ?>"><?php echo date("M") ?></option>
                 <option value="Jan">Jan</option>
                <option value="Feb">Feb</option>
                <option value="Mar">Mar</option>
                <option value="Apr">Apr</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="Aug">Aug</option>
                <option value="Sep">Sep</option>
                <option value="Oct">Oct</option>
                <option value="Nov">Nov</option>
                <option value="Dec">Dec</option>
              </select>
            </div>
             <div class="col-4">
             <select name="check-out_year">
                 <option value="<?php echo date("Y"); ?>"><?php echo date("Y"); ?></option>    
                 <option value="<?php echo date("Y")+1; ?>"><?php echo date("Y")+1; ?></option>    
             </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <label for="no_children">Children:</label><br>
            <input type="number" name="no_children" min="0">
          </div>
          <div class="col-4">
            <label for="no_male">Male:</label><br>
            <input type="number" name="no_male" min="0">
          </div>
          <div class="col-4">
            <label for="no_female">Female:</label><br>
            <input type="number" name="no_female" min="0">
          </div>
          </div>
          <div class="row">
              <div class="col-4">
                <h5 class="label">Rooms:</h5>
              </div>
              <div class="col-8">
                  <h5 class="label">Rooms Available: <?php echo  $rooms_available; ?></h5>
              </div>
              </div>
              <div class="row">
              <div class="col-4">
                   <div>
                   <label>
                      Deluxe Room </label><input type="number" name="no_deluxe_room" min="0" max="<?php echo $deluxe_room_available; ?>" value="1">
                   </div>

              </div>
              <div class="col-4">
                   <div>
                   <label>
                       Double Bedroom</label><input type="number" name="no_db_room" min="0" max="<?php echo $db_room_available; ?>" value="0">
                   </div>

              </div>
              <div class="col-4">
                   <div>
                   <label>
                      Suite</label><input type="number" name="no_suite_room" min="0" max="<?php echo $suite_room_available; ?>" value="0">
                   </div>

              </div>
              <div class="col-4">
                   <div>
                   <label>
                      Luxury Room </label><input type="number" name="no_luxury_room" min="0" max="<?php echo $luxury_room_available; ?>" value="0">
                   </div>

              </div>
              <div class="col-4">
                   <div>
                   <label>
                       Superior Room </label><input type="number" name="no_superior_room" min="0" max="<?php echo $superior_room_available; ?>" value="0">
                   </div>

              </div>
              <div class="col-4">
                   <div>
                   <label>
                      Premier Room </label><input type="number" name="no_premier_room" min="0" max="<?php echo $premier_room_available; ?>" value="0">
                   </div>

              </div>
              <div class="col-4">
                  
              </div>
          </div>
          <div class="row">
            <div class="col-4 col-offset-4">
             <input type="submit" name="booking_submit" value="Next" class="btn">
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

















