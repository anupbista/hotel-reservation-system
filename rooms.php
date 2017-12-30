<?php session_start(); ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Room Packages</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="rooms-page">

<?php require_once('db/user_database.php');?>

<!-- top information -->
<div class="top-inf">
  <div class="container">
    <div class="row">
      <div class="col-4 text-center">
        <p><img src="img/address.png" alt="" class="img-icon">Tevairoa, Bora Bora Island</p>
      </div>
      <div class="col-4 text-center">
          <?php  
    if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
           echo "<h3> Welcome &nbsp;".$_SESSION['login']."</h3>"; }
           ?>

      </div>
      <div class="col-4 text-center">
        <p><img src="img/phone.png" alt="" class="img-icon">Contact No: 9843672756</p>
      </div>
      <div class="login_register">
           <?php  
    if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
       echo '<a href="user-dashboard.php" class="btn">DASHBOARD</a>
       <form action="index-profile.php" method="post">
            <input type="submit" name="logout" class="btn" value="LOGOUT">
            </form>';
        }
        else{
            echo ' <a href="login.php" class="btn">LOGIN</a>
        <a href="register.php" class="btn">REGISTER</a>';
        }
        ?>
            
            
      </div>
    </div>
  </div>
</div>
<!-- top information -->

<?php include('inc/header.php'); ?>


<!-- rooms -->
<div class="rooms">
    <div class="container">
        <div class="row">
            <div class="col-4"><!-- room -->
                <div class="card">
                    <div class="image">
                        <img src="img/rooms1.jpg" alt="">
                         <div class="button">
                        <form action="rooms.php" method="post">
                            <input type="submit" value="BOOK NOW" name="book_now_btn" class="btn">
                        </form>
                    </div>
                    </div>
                    <div class="text text-center">
                        <small>DELUXE ROOM</small>
                        <strong>$300.00</strong>&nbsp;/&nbsp;<span>Night</span>
                         <div class="icons">   
                        <img src="img/wifi.png" alt="" class="img-icon">
                        <img src="img/tv.png" alt="" class="img-icon">
                        <img src="img/ac.png" alt="" class="img-icon">
                        <img src="img/room-service.png" alt="" class="img-icon">
                        </div>
                    </div>
                </div>
            </div><!-- room -->
             <div class="col-4"><!-- room -->
                <div class="card">
                    <div class="image">
                        <img src="img/room2.jpg" alt="">
                         <div class="button">
                        <form action="rooms.php" method="post">
                            <input type="submit" value="BOOK NOW" name="book_now_btn" class="btn">
                        </form>
                    </div>
                    </div>
                    <div class="text text-center">
                        <small>DOUBLE BEDROOM</small>
                        <strong>$600.00</strong>&nbsp;/&nbsp;<span>Night</span>
                         <div class="icons">   
                        <img src="img/wifi.png" alt="" class="img-icon">
                        <img src="img/tv.png" alt="" class="img-icon">
                        <img src="img/phone-b.png" alt="" class="img-icon">
                        <img src="img/room-service.png" alt="" class="img-icon">
                        </div>
                    </div>
                </div>
            </div><!-- room -->
             <div class="col-4"><!-- room -->
                <div class="card">
                    <div class="image">
                        <img src="img/room3.jpg" alt="">
                         <div class="button">
                        <form action="rooms.php" method="post">
                            <input type="submit" value="BOOK NOW" name="book_now_btn" class="btn">
                        </form>
                    </div>
                    </div>
                    <div class="text text-center">
                        <small>SUITE</small>
                        <strong>$700.00</strong>&nbsp;/&nbsp;<span>Night</span>
                         <div class="icons">   
                        <img src="img/wifi.png" alt="" class="img-icon">
                        <img src="img/tv.png" alt="" class="img-icon">
                        <img src="img/ac.png" alt="" class="img-icon">
                        <img src="img/parking.png" alt="" class="img-icon">
                        <img src="img/room-service.png" alt="" class="img-icon">
                        </div>
                    </div>
                </div>
            </div><!-- room -->
        </div>
        <div class="row">
            <div class="col-4"><!-- room -->
                <div class="card">
                    <div class="image">
                        <img src="img/room4.jpg" alt="">
                         <div class="button">
                        <form action="rooms.php" method="post">
                            <input type="submit" value="BOOK NOW" name="book_now_btn" class="btn">
                        </form>
                    </div>
                    </div>
                    <div class="text text-center">
                        <small>LUXURY</small>
                        <strong>$1200.00</strong>&nbsp;/&nbsp;<span>Night</span>
                         <div class="icons">   
                        <img src="img/wifi.png" alt="" class="img-icon">
                        <img src="img/tv.png" alt="" class="img-icon">
                        <img src="img/ac.png" alt="" class="img-icon">
                        <img src="img/parking.png" alt="" class="img-icon">
                        <img src="img/cah.png" alt="" class="img-icon">
                        <img src="img/room-service.png" alt="" class="img-icon">
                        </div>
                    </div>
                </div>
            </div><!-- room -->
             <div class="col-4"><!-- room -->
                <div class="card">
                    <div class="image">
                        <img src="img/room5.jpg" alt="">
                         <div class="button">
                       <form action="rooms.php" method="post">
                            <input type="submit" value="BOOK NOW" name="book_now_btn" class="btn">
                        </form>
                    </div>
                    </div>
                    <div class="text text-center">
                        <small>SUPERIOR ROOM</small>
                        <strong>$500.00</strong>&nbsp;/&nbsp;<span>Night</span>
                         <div class="icons">   
                        <img src="img/wifi.png" alt="" class="img-icon">
                        <img src="img/tv.png" alt="" class="img-icon">
                        <img src="img/ac.png" alt="" class="img-icon">
                        <img src="img/cah.png" alt="" class="img-icon">
                        <img src="img/room-service.png" alt="" class="img-icon">
                        </div>
                    </div>
                </div>
            </div><!-- room -->
             <div class="col-4"><!-- room -->
                <div class="card">
                    <div class="image">
                        <img src="img/room6.jpg" alt="">
                         <div class="button">
                        <form action="rooms.php" method="post">
                            <input type="submit" value="BOOK NOW" name="book_now_btn" class="btn">
                        </form>
                    </div>
                    </div>
                    <div class="text text-center">
                        <small>PREMIER ROOM</small>
                        <strong>$900.00</strong>&nbsp;/&nbsp;<span>Night</span>
                         <div class="icons">   
                        <img src="img/wifi.png" alt="" class="img-icon">
                        <img src="img/tv.png" alt="" class="img-icon">
                        <img src="img/ac.png" alt="" class="img-icon">
                        <img src="img/parking.png" alt="" class="img-icon">
                        <img src="img/room-service.png" alt="" class="img-icon">
                        </div>
                    </div>
                </div>
            </div><!-- room -->
        </div>
    </div>
</div>

<!-- contact -->
<?php include('inc/footer.php'); ?>
<!-- footer end -->
       
</body>
</html>

















