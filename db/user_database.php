<!-- database_core file -->
<?php require_once('database_core.php'); ?>

<?php 
// USER Database Start

// User Register Start

$alert["username"]="";
$alert["password"]="";
$alert["required"]="";
$alert["wrong"]="";
$alert["email"]="";
if(isset($_POST['user_register_submit'])){
	if(!empty($_POST['user_firstname']) && !empty($_POST['user_lastname']) && !empty($_POST['user_username']) && !empty($_POST['user_password']) && !empty($_POST['re_user_password']) && !empty($_POST['user_email'])){
		$user_firstname = $_POST['user_firstname'];
		$user_lastname = $_POST['user_lastname'];
		$user_username = $_POST['user_username'];
		$user_password = $_POST['user_password'];
		// $user_password_hash = md5('$user_password');
		$re_user_password = $_POST['re_user_password'];
		$user_email = $_POST['user_email'];
		   if($result_user_register->num_rows>0){	
			while($row=$result_user_register->fetch_assoc())
			{	
				$check_user_username = $row['username'];
				$check_user_email = $row['email'];
				if($user_username != $check_user_username){
					if($user_password == $re_user_password){
					if($user_email != $check_user_email){
			$insert_user_register = "INSERT into user_register VALUES ('$user_firstname','$user_lastname','$user_username','$user_password','$user_email')";
			$insert_user_register_result = $conn->query($insert_user_register);
				// redirect to profile page
				header("Location:index-profile.php");
			}
			else{
				$alert["email"] = "Email already registered!"; 			
			}}
		else{
			$alert["password"] = "Passwords donot match!";
		}
				}
				else{
					$alert["username"] = "Username already taken!";
				}}}
			else{
			$insert_user_register = "INSERT into user_register VALUES ('$user_firstname','$user_lastname','$user_username','$user_password','$user_email')";
			$insert_user_register_result = $conn->query($insert_user_register);
			// redirect to profile page
				header("Location:index-profile.php");
			}
	}
	else{
		$alert["required"] = "All fields are required!";
	}
}// user_register_submit isset
// LOGIN User Start

if(isset($_POST['user_login_submit'])){
	if(!empty($_POST['user_username']) && !empty($_POST['user_password']) ){
		$user_username = $_POST['user_username'];
		$user_password = $_POST['user_password'];
			   if($result_user_register->num_rows>0){	
			while($row=$result_user_register->fetch_assoc())
			{
				$check_user_username = $row['username'];
				$check_user_password_hash = $row['password'];
				
			if(($user_username == $check_user_username) && ($user_password == $check_user_password_hash)){
						
						$_SESSION['login'] = $check_user_username;
						header("Location:index-profile.php");
					
					}
					else{
						$alert["wrong"] = "Incorret Username or Password OR <a href=\"register.php\">Register</a>";
					}
			}}
			else{
				$alert["wrong"] = "Incorret Username or Password OR <a href=\"register.php\">Register</a>";
			}

	}	
	else{
		$alert["required"] = "Enter your username and password!";
	}
}// login user isset

// LOGOUT User
if(isset($_POST['logout'])){
	session_destroy();
	header("location:login.php");
}

// Booking First Page

$alert_booking["user_booking_details"] = "";
$alert["success_book"] = "";
$alert["fail_book"] = "";
if(isset($_POST['booking_submit'])){
	if(!empty($_POST['check-in_day']) && !empty($_POST['check-in_month']) && !empty($_POST['check-in_year']) && !empty($_POST['check-out_day']) && !empty($_POST['check-out_month']) && !empty($_POST['check-out_year']) && !empty(strlen($_POST['no_children'])) && !empty(strlen($_POST['no_male'])) && !empty(strlen($_POST['no_female'])) && !empty(strlen($_POST['no_deluxe_room'])) && !empty(strlen($_POST['no_db_room'])) && !empty(strlen($_POST['no_suite_room'])) && !empty(strlen($_POST['no_luxury_room'])) && !empty(strlen($_POST['no_superior_room'])) && !empty(strlen($_POST['no_premier_room'])) ){
$session = $_SESSION['login'];
$check_in_day = $_POST['check-in_day']; 
$check_in_month = $_POST['check-in_month']; 
$check_in_year = $_POST['check-in_year']; 
$check_out_day = $_POST['check-out_day']; 
$check_out_month = $_POST['check-out_month']; 
$check_out_year = $_POST['check-out_year']; 
$no_children = $_POST['no_children']; 
$no_male = $_POST['no_male']; 
$no_female = $_POST['no_female'];
$no_deluxe_room = $_POST['no_deluxe_room'];
$no_db_room = $_POST['no_db_room'];
$no_suite_room = $_POST['no_suite_room'];
$no_luxury_room = $_POST['no_luxury_room'];
$no_superior_room = $_POST['no_superior_room'];
$no_premier_room = $_POST['no_premier_room'];
$date = date("Y-m-d");
$total_rooms_booked = $no_deluxe_room+$no_db_room+$no_suite_room+$no_luxury_room+$no_superior_room+$no_premier_room;
// insert booking data in booking table
$insert_user_booking_details = "INSERT into booking VALUES ('$session','$check_in_day','$check_in_month','$check_in_year','$check_out_day','$check_out_month','$check_out_year','$no_children','$no_male','$no_female','$no_deluxe_room','$no_db_room','$no_suite_room','$no_luxury_room','$no_superior_room','$no_premier_room','$total_rooms_booked','$date')";
	$insert_user_booking_details_result = $conn->query($insert_user_booking_details);

if($sql_room_price_result->num_rows>0){	
while($row=$sql_room_price_result->fetch_assoc())
{
	$session = $_SESSION['login'];
	$deluxe_room_price = $row['deluxe_room'];
	$db_room_price = $row['db_room'];
	$suite_room_price = $row['suite_room'];
	$luxury_room_price = $row['luxury_room'];
	$superior_room_price = $row['superior_room'];
	$premier_room_price = $row['premier_room'];
	// calculate price
	$total_deluxe_room_price = $deluxe_room_price*$no_deluxe_room;
	$total_db_room_price = $db_room_price*$no_db_room;
	$total_suite_room_price = $suite_room_price*$no_suite_room;
	$total_luxury_room_price = $luxury_room_price*$no_luxury_room;
	$total_superior_room_price = $superior_room_price*$no_superior_room;
	$total_premier_room_price = $premier_room_price*$no_premier_room;
	$total_rooms_price = $total_deluxe_room_price+$total_db_room_price+$total_suite_room_price+$total_luxury_room_price+$total_superior_room_price+$total_premier_room_price;	
	// insert user room price in user_room_price table
	$insert_user_room_price = "INSERT into user_room_price values('$session ','$total_deluxe_room_price','$total_db_room_price','$total_suite_room_price','$total_luxury_room_price','$total_superior_room_price','$total_premier_room_price','$total_rooms_price')";
	$insert_user_room_price_result=$conn->query($insert_user_room_price);
}
}
	header("Location: personal-details.php");

}
else{
	$alert_booking["user_booking_details"] = "All fields are required"; 
}

}

//total rooms, available rooms, rooms_booked
if($result_rooms->num_rows>0){	
while($row=$result_rooms->fetch_assoc()){
$deluxe_room = $row['deluxe_room']; 
$double_room = $row['double_room']; 
$suite_room = $row['suite_room']; 
$luxury_room = $row['luxury_room']; 
$superior_room = $row['superior_room']; 
$premier_room = $row['premier_room'];
$total_rooms_booked = 0;
$total_deluxe_room_booked = 0;
$total_db_room_booked = 0;
$total_suite_room_booked = 0;
$total_luxury_room_booked = 0;
$total_superior_room_booked = 0;
$total_premier_room_booked = 0;
$total_rooms = $deluxe_room + $double_room + $suite_room + $luxury_room + $superior_room + $premier_room;
while ($row = $user_booking_result->fetch_assoc()){
    $total_rooms_booked_db = $row['total_rooms_booked'];
    $total_deluxe_room_booked_db = $row['no_deluxe_room'];
    $total_db_room_booked_db = $row['no_db_room'];
    $total_suite_room_booked_db = $row['no_suite_room'];
    $total_luxury_room_booked_db = $row['no_luxury_room'];
    $total_superior_room_booked_db = $row['no_superior_room'];
    $total_premier_room_booked_db = $row['no_premier_room'];
    $total_rooms_booked += $total_rooms_booked_db;
    $total_deluxe_room_booked += $total_deluxe_room_booked_db;
    $total_db_room_booked += $total_db_room_booked_db;
    $total_suite_room_booked += $total_suite_room_booked_db;
    $total_luxury_room_booked += $total_luxury_room_booked_db;
    $total_superior_room_booked += $total_superior_room_booked_db;
    $total_premier_room_booked += $total_premier_room_booked_db;
// personal details
  $check_in_day_db = $row['check_in_day'];
  $check_in_month_db = $row['check_in_month'];
  $check_in_year_db = $row['check_in_year'];
  $check_out_day_db = $row['check_out_day'];
  $check_out_month_db = $row['check_out_month'];
  $check_out_year_db = $row['check_out_year'];  
  $total_rooms_booked_db = $row['total_rooms_booked'];

}
 $rooms_available =  $total_rooms-$total_rooms_booked;
 $deluxe_room_available =  $deluxe_room-$total_deluxe_room_booked;
 $db_room_available =  $double_room-$total_db_room_booked;
 $suite_room_available =  $suite_room-$total_suite_room_booked;
 $luxury_room_available =  $luxury_room-$total_luxury_room_booked;
 $superior_room_available =  $superior_room-$total_superior_room_booked;
 $premier_room_available =  $premier_room-$total_premier_room_booked;
}
}
// rooms page book now redirect
if(isset($_POST['book_now_btn'])){
	header("Location: index-profile.php");
}

// personal details 
while($row=$sql_user_room_price_result->fetch_assoc()){
	$total_price_db = $row['total_price'];
}


// insert personal details
$alert["personal_details"] = "";
if(isset($_POST['personal_details_submit'])){
	if(!empty($_POST['phone']) && !empty($_POST['hour']) && !empty($_POST['day_night']) && !empty($_POST['additional']) && !empty($_POST['country']) && !empty($_POST['city']) && !empty($_POST['state'])  && !empty(strlen($_POST['zip_code'])) && !empty($_POST['payment'])  ){
		$session = $_SESSION['login'];
		$phone_no = $_POST['phone'];
		$hour = $_POST['hour'];
		$day_night = $_POST['day_night'];
		$additional = $_POST['additional'];
		$country = $_POST['country'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip_code = $_POST['zip_code'];
		$payment = $_POST['payment'];
		$insert_personal_details = "INSERT into personal_details values('$session','$phone_no','$hour','$day_night','$additional','$country','$city','$state','$zip_code','$payment')";
		$insert_personal_details_query = $conn->query($insert_personal_details);
	header("Location: conformation.php");

	}
	else{
		$alert["personal_details"] = "All fields are required!";
	}
}
// conformation 

if(isset($_POST['conform_submit']) || isset($_POST['dashboard'])){
	header("Location: user-dashboard.php");
}

$sql_user = "SELECT * FROM user_register";
$result_user = $conn->query($sql_user);

// while($row=$result_user->fetch_assoc()){
// $user_username = $row['username'];}
if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
	$ses = $_SESSION['login']; 
$personal_detail = "SELECT * FROM personal_details where user_name='$ses'";
$personal_detail_result = $conn->query($personal_detail);

$booking = "SELECT * FROM booking where user_name='$ses'";
$booking_result = $conn->query($booking);

$room_price = "SELECT * FROM user_room_price where user_name='$ses'";
$room_price_result = $conn->query($room_price);

 while($row=$personal_details_result->fetch_assoc()){
      $user_name_db = $row['user_name']; 
  }
}
?>
