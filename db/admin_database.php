
<!-- database_core file -->
<?php require_once('database_core.php'); ?>

<?php 

$alert["admin_error"] = "";
$alert["admin_blank"] = "";
if(isset($_POST['submit_admin'])){

	// check form admin login not empty
if(!empty($_POST['username']) && !empty($_POST['password'])){
$user_name=$_POST['username'];
$user_password=$_POST['password'];
if($admin_users_result->num_rows>0){	
while($row=$admin_users_result->fetch_assoc())
{
// check for correct username and password
$check_username = $row['username'];
$check_password = $row['password'];
if($user_name == $check_username && $user_password == $check_password){
	// redirect to dashboard.php
	$_SESSION["admin"] = $user_name;
	header("Location:dashboard.php");
}
else{
	$alert["admin_error"] = "Incorrect username and password";
}
}
}}
else{
	$alert["admin_blank"] = "Fill out the forms!";
}

}// isset end

// LOGOUT admin
if(isset($_POST['logout'])){
	session_destroy();
	header("location:index.php");
	// redirect page
}
if(isset($_POST['dashboard'])){
	header("location:dashboard.php");
}
if(isset($_POST['booking'])){
	header("location:booking.php");
}
if(isset($_POST['rooms'])){
	header("location:rooms.php");
}
if(isset($_POST['users'])){
	header("location:users.php");
}
//dashboard
// rooms
$alert["dashboard-rooms"] = "";
$total_deluxe_rooms_booked = 0;
$total_db_rooms_booked = 0;
$total_suite_rooms_booked = 0;
$total_luxury_rooms_booked = 0;
$total_superior_rooms_booked = 0;
$total_premier_rooms_booked = 0;
$total_rooms_booked = 0;
if($user_booking_result->num_rows>0){	
while($row=$user_booking_result->fetch_assoc())
{
	$total_deluxe_rooms_booked += $row['no_deluxe_room'];
	$total_db_rooms_booked += $row['no_db_room'];
	$total_suite_rooms_booked += $row['no_suite_room'];
	$total_luxury_rooms_booked += $row['no_luxury_room'];
	$total_superior_rooms_booked += $row['no_superior_room'];
	$total_premier_rooms_booked += $row['no_premier_room'];
	$total_rooms_booked += $row['total_rooms_booked'];
	$booking_date = $row['booking_date'];
}}
else{
	$alert["dashboard-rooms"] = "NO rooms booked";
}

// guests
$children = 0;
$male = 0;
$female = 0;
if($user_booking_guests_result->num_rows>0){	
while($row=$user_booking_guests_result->fetch_assoc())
{
	$children += $row['no_children'];
	$male += $row['no_male'];
	$female += $row['no_female'];
	$total_guests = $children+$male+$female;
}}
else{
	$alert["dashboard-guests"] = "NO guests";
}
// users
$alert["no-admin"] = "";
if($admin_users_display_result->num_rows>0){
while($row=$admin_users_display_result->fetch_assoc())
{
	$username = $row['username'];
	$email = $row['email'];
	$phone = $row['phone'];
	$priviledges = $row['priviledges'];
}}
else{
	$alert["no-admin"] = "No admins";
}

// rooms
$alert["no-rooms"] = "";
if($result_rooms->num_rows>0){
while($row=$result_rooms->fetch_assoc())
{
	$deluxe_room = $row['deluxe_room'];
	$db_room = $row['double_room'];
	$suite_room = $row['suite_room'];
	$luxury_room = $row['luxury_room'];
	$superior_room = $row['superior_room'];
	$premier_room = $row['premier_room'];
	$total_rooms = $deluxe_room + $db_room + $suite_room + $luxury_room + $superior_room + $premier_room;
	$rooms_available =  $total_rooms-$total_rooms_booked;
 	$deluxe_room_available =  $deluxe_room-$total_deluxe_rooms_booked;
	 $db_room_available =  $db_room-$total_db_rooms_booked;
 	$suite_room_available =  $suite_room-$total_suite_rooms_booked;
 	$luxury_room_available =  $luxury_room-$total_luxury_rooms_booked;
	 $superior_room_available =  $superior_room-$total_superior_rooms_booked;
 	$premier_room_available =  $premier_room-$total_premier_rooms_booked;
}}
else{
	$alert["no-rooms"] = "Error";
}

// room booked today
$today = date("Y-m-d");
$total_deluxe_rooms_booked_today = 0;
$total_db_rooms_booked_today = 0;
$total_suite_rooms_booked_today = 0;
$total_luxury_rooms_booked_today = 0;
$total_superior_rooms_booked_today = 0;
$total_premier_rooms_booked_today = 0;
$total_rooms_booked_today = 0;
$user_booking_today = "SELECT * FROM booking where booking_date = '$today'";
$user_booking_today_result = $conn->query($user_booking_today);
while($row=$user_booking_today_result->fetch_assoc())
{
	$total_deluxe_rooms_booked_today += $row['no_deluxe_room'];
	$total_db_rooms_booked_today += $row['no_db_room'];
	$total_suite_rooms_booked_today += $row['no_suite_room'];
	$total_luxury_rooms_booked_today += $row['no_luxury_room'];
	$total_superior_rooms_booked_today += $row['no_superior_room'];
	$total_premier_rooms_booked_today += $row['no_premier_room'];
	$total_rooms_booked_today += $row['total_rooms_booked'];
}

// change rooms


?>