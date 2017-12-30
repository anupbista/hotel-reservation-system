<?php 
$username="root";
$server="localhost";
$password="";
$conn= new mysqli($server,$username,$password);
 if($conn->connect_error){
 	die("Error Connecting To Database");
 }

// database connection
$conn->select_db("paradise_reservation");

 // User_register query
$sql_user_register = "SELECT * FROM user_register";
$result_user_register = $conn->query($sql_user_register);

// rooms table query
$sql_rooms = "SELECT * FROM rooms";
$result_rooms = $conn->query($sql_rooms);

// user_booking_details query
$sql_user_booking = "SELECT * FROM booking";
$user_booking_result = $conn->query($sql_user_booking);
// to display in booking in admin
$user_booking = $conn->query($sql_user_booking);


// room price query
$sql_room_price = "SELECT * FROM room_price";
$sql_room_price_result = $conn->query($sql_room_price);


// user_room price query
$sql_user_room_price = "SELECT * FROM user_room_price";
$sql_user_room_price_result = $conn->query($sql_user_room_price);

// personal details query
$personal_details = "SELECT * FROM personal_details";
$personal_details_result = $conn->query($personal_details);


// admin start
// admin users username + password
$admin_users = "SELECT * FROM admin_users";
$admin_users_result = $conn->query($admin_users);

// guests
$sql_user_guests_booking = "SELECT * FROM booking";
$user_booking_guests_result = $conn->query($sql_user_guests_booking);

// users
$admin_users_display = "SELECT * FROM admin_users";
$admin_users_display_result = $conn->query($admin_users_display);
// to display all admins
$admin_users_display_results = $conn->query($admin_users_display);

