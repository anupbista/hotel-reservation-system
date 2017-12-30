<?php session_start(); ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Login</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="user_login">

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
        <a href="register.php" class="btn">REGISTER</a>
      </div>
    </div>
  </div>
</div>
<!-- top information -->

<?php include('inc/header.php'); ?>

<!-- banner start -->
<div class="banner">
  <div class="container">
    <div class="row">
    <div class="card booking-box col-6 col-offset-3">
        <div class="text-center booking-text">
        <h2>LOGIN</h2>
        </div>
      <form action="login.php" method="post">
        <div class="row">
          <div class="col-12 alert text-center">
            <?php echo $alert["required"]; ?> <?php echo $alert["wrong"]; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <label for="user_username">Username:</label><br>
            <input type="text" name="user_username">
          </div>
         </div>
         <div class="row"> 
          <div class="col-12">
            <label for="user_password">Password:</label><br>
            <input type="password" name="user_password">
          </div>
          </div>
        <div class="col-4 col-offset-4">
          <input type="submit" name="user_login_submit" value="Login" class="btn">
        </div>
        <div class="row">
    <div class="col-6 col-offset-3 text-center">
    <a href="register.php" class="not_register">Not Registered. Register</a>
    </div>
      </form>
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

















