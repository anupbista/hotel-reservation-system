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
<body class="admin-dashboard booking-page">


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
    <?php 
 $alert["no-booking"] = "";
     ?>
    <h3 class="required"><?php echo $alert["no-booking"]; ?></h3>
    <h2>Bookings:</h2> 
        <div class="col-12">
          <table>
            <tr><td>Username</td><td>Arrival</td><td>Departure</td><td>Children</td><td>Adults</td><td>Rooms</td><td>Booking Date</td></tr>
            <?php 
if($user_booking->num_rows>0){
while($row=$user_booking->fetch_assoc())
{
  $user_name = $row['user_name'];
  $check_in_day = $row['check_in_day'];
  $check_in_month = $row['check_in_month'];
  $check_in_year = $row['check_in_year'];
  $check_out_day = $row['check_out_day'];
  $check_out_month = $row['check_out_month'];
  $check_out_year = $row['check_out_year'];
  $no_children = $row['no_children'];
  $no_male = $row['no_male'];
  $no_female = $row['no_female'];
  $adults = $no_male + $no_female;
  $total_rooms = $row['total_rooms_booked'];
         ?>
            <tr><td><?php echo "$user_name"; ?></td><td><?php echo "$check_in_day-$check_in_month-$check_in_year"; ?></td><td><?php echo "$check_out_day-$check_out_month-$check_out_year"; ?></td><td><?php echo "$no_children"; ?></td><td><?php echo "$adults"; ?></td><td><?php echo "$total_rooms"; ?></td><td><?php echo "$booking_date"; ?></td></tr>
          <?php }}
else{
  $alert["no-booking"] = "No bookings"; 
}
           ?>
           </table>
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