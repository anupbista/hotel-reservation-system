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
<body class="admin-dashboard dashboard-page">


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
    <h3 class="required"><?php echo $alert["dashboard-rooms"]; ?></h3>
        <div class="col-6">
          <h2>Rooms:</h2>
          <table>
            <tr><td>Total Rooms Booked Today:</td><td><?php echo "$total_rooms_booked_today"; ?></td></tr>
            <tr><td><hr></td></tr>
            <tr><td><h3>Total Rooms Booked:</h3></td><td></td></tr>
            <tr><td>Deluxe Room Booked:</td><td><?php echo "$total_deluxe_rooms_booked"; ?></td></tr>
            <tr><td>Doublr Bedroom Booked:</td><td><?php echo "$total_db_rooms_booked"; ?></td></tr>
            <tr><td>Suite Room Booked:</td><td><?php echo "$total_suite_rooms_booked"; ?></td></tr>
            <tr><td>Luxury Room Booked:</td><td><?php echo "$total_luxury_rooms_booked"; ?></td></tr>
            <tr><td>Superior Room Booked:</td><td><?php echo "$total_superior_rooms_booked"; ?></td></tr>
            <tr><td>Primier Room Booked:</td><td><?php echo "$total_premier_rooms_booked"; ?></td></tr>
          </table>
        </div>
        <div class="col-6">
          <h2>Guests:</h2>
          <table>
            <tr><td>Children:</td><td><?php echo "$children"; ?></td></tr>
            <tr><td>Male:</td><td><?php echo "$male"; ?></td></tr>
            <tr><td>Female:</td><td><?php echo "$female"; ?></td></tr>
            <tr><td><hr></td></tr>
            <tr><td>Total Guests:</td><td><?php echo "$total_guests"; ?></td></tr>
          </table>
        </div>
    </div>
     
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