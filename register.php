
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Register</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="user_register">

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
      </div>
    </div>
  </div>
</div>
<!-- top information -->


<!-- navbar start-->
<?php include('inc/header.php'); ?>
<!-- navbar end-->



<!-- banner start -->
<div class="banner">
  <div class="container">
    <div class="row">
    <div class="card booking-box col-6 col-offset-3">
        <div class="text-center booking-text">
        <h2>REGISTER</h2>
        </div>
      <form action="" method="post">
        <div class="row">
          <div class="col-12 text-center alert"><?php echo $alert["required"]; ?></div>
        </div>
        <div class="row">
          <div class="col-6">
            <label for="user_firstname">Firstname:</label>
            <input type="text" name="user_firstname">
          </div>
          <div class="col-6">
            <label for="user_lastname">Lastname:</label>
            <input type="text" name="user_lastname">
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <label for="user_username">Username:</label><br>
            <input type="text" name="user_username">
            <div class="alert"><?php echo $alert["username"]; ?>
            </div>
          </div>
         </div>
         <div class="row"> 
          <div class="col-12">
            <label for="user_password">Password:</label><br>
            <input type="password" name="user_password">
            <div class="alert"><?php echo $alert["password"]; ?>
            </div>
          </div>
          </div>
          <div class="row"> 
          <div class="col-12">
            <label for="re_user_password">Re-Password:</label><br>
            <input type="password" name="re_user_password">
            <div class="alert"><?php echo $alert["password"]; ?>
            </div>
          </div>
          </div>
           <div class="row"> 
          <div class="col-12">
            <label for="user_email">Email:</label><br>
            <input type="email" name="user_email">
            <div class="alert">
              <?php echo $alert["email"];?>
            </div>
          </div>
          </div>
        <div class="col-4 col-offset-4">
          <input type="submit" name="user_register_submit" value="Register" class="btn">
        </div>
      </form>
    </div>
    </div>
  </div>
</div>

<!-- contact -->
<?php include('inc/footer.php'); ?>
<!-- footer end -->
       
</body>
</html>

















