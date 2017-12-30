<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="admin-dashboard users-page">


<!-- database_core file -->
<?php require_once('../db/admin_database.php'); ?> 


<?php
 if(isset($_SESSION['admin']) && !empty($_SESSION['admin']))
 {
 ?>


<!-- navbar start -->
<nav>
  <div class="container">
    <div class="row">
    <div class="col-4">
    <h3>Paradise Resort</h3>
    </div>
    <div class="col-4 col-offset-1">
    <h3>Welcome <?php echo $_SESSION["admin"]; ?></h3>
    </div>
    <div class="col-3">
    <ul>
      <li><form action="dashboard.php" method="post">
        <input type="submit" value="LOGOUT" class="btn" name="logout">
      </form></li>
    </ul>
    </div>
    </div>
  </div>
</nav>

<!-- navbar end -->
<!-- content start -->


<!-- sidebar start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-2">
      <div class="sidebar text-center">
      <form action="dashboard.php" method="post">
        <input type="submit" class="btn dashboard-link" value="DASHBOARD" name="dashboard">
        <input type="submit" class="btn booking-link" value="BOOKING" name="booking">
        <input type="submit" class="btn rooms-link" value="ROOMS" name="rooms">
        <input type="submit" class="btn users-link" value="USERS" name="users">
        </form>
      </div>
    </div>
    <div class="col-10 content">
      <h3 class="required"><?php echo $alert["no-admin"]; ?></h3>
      <?php 
      if($admin_users_display_results->num_rows>0){
      while($row=$admin_users_display_results->fetch_assoc()) {
       ?>
        <table>
          <tr><td>Username:</td><td>Email:</td><td>Phone:</td><td>Priviledges:</td></tr>
          <tr><td><?php echo "$username"; ?></td><td><?php echo "$email"; ?></td><td><?php echo "$phone"; ?></td><td><?php echo "$priviledges"; ?></td></tr>
        </table>
        <?php }} ?>
    </div>
  </div>
</div>
<!-- sidebar end -->

<!-- content end -->
<?php } 
else{
    echo "<div class=\"text-center\" style=\"margin-top: 200px;font-size:20px;\"> You must be logged in to continue || <a href=\"index.php\">LOGIN</a></div>"; 
}
?>
</body>
</html> 