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
<body class="admin-dashboard rooms-page">


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
    <h3 class="required"><?php echo $alert["no-rooms"]; ?></h3>
    <div class="col-6">
    <h2>Total Rooms:</h2>
        <table>
          <tr><td>Deluxe Room:</td><td><?php echo "$deluxe_room"; ?></td></tr>
          <tr><td>Double Bedroom</td><td><?php echo "$db_room"; ?></td></tr>
          <tr><td>Suite Room</td><td><?php echo "$suite_room"; ?></td></tr>
          <tr><td>Luxury Room</td><td><?php echo "$luxury_room"; ?></td></tr>
          <tr><td>Superior Room</td><td><?php echo "$superior_room"; ?></td></tr>
          <tr><td>Premier Room</td><td><?php echo "$premier_room"; ?></td></tr>
          <tr><td><hr></td></tr>
          <tr><td>Total Rooms:</td><td><?php echo "$total_rooms"; ?></td></tr>
        </table>
        </div>
        <div class="col-6">
          <h2>Available Rooms:</h2>
          <table>
            <tr><td>Deluxe Room Availble:</td><td><?php echo "$deluxe_room_available"; ?></td></tr>
          <tr><td>Double Bedroom Availble</td><td><?php echo "$db_room_available"; ?></td></tr>
          <tr><td>Suite Room Availble</td><td><?php echo "$suite_room_available"; ?></td></tr>
          <tr><td>Luxury Room Availble</td><td><?php echo "$luxury_room_available"; ?></td></tr>
          <tr><td>Superior Room Availble</td><td><?php echo "$superior_room_available"; ?></td></tr>
          <tr><td>Premier Room Availble</td><td><?php echo "$premier_room_available"; ?></td></tr>
          <tr><td><hr></td></tr>
          <tr><td>Total Room Availble:</td><td><?php echo "$rooms_available"; ?></td></tr>
          </table>
        </div>
        <div class="col-6">
          <table><tr><td>Total Rooms Booked:</td><td><?php echo "$total_rooms_booked"; ?></td></tr></table>
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