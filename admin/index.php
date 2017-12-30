<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin || Paradise Resort</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body class="admin-login-page"> 

<!-- database_core file -->
<?php require_once('../db/admin_database.php'); ?>  

<div class="admin-login">
  <div class="container">
    <div class="row">
     <div class="login card col-6 col-offset-3 ">
          <h1 class="text-center">ADMIN LOGIN</h1>
          <h3 class="required text-center"><?php echo $alert["admin_blank"]; ?></h3>
          <h3 class="required text-center"><?php echo $alert["admin_error"]; ?></h3>
          <form action="index.php" method="post">
            <div>
            <label for="">Username:</label><br>
            <input type="text" name="username">
            </div>
            <div>
            <label for="">Password:</label><br>    
            <input type="password" name="password">
            </div>
            <div>
            <input type="submit" name="submit_admin" class="btn" value="LOGIN">
            </div>
          </form>
        </div>
      </div>
      </div>
  </div>

</body>
</html>