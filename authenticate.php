<?php
//Probably caused by back button... Check if logged-in...
if(!$_SESSION["username"])
{
    //Do not show protected data, redirect to login...
    header('Location:login.php');
}
else{
	//Set SESSION vars to something a little more friendly
	if($_SESSION['username']) 		$username = $_SESSION['username'];
	if($_SESSION['first_name']) 	$first_name = $_SESSION['first_name'];
	if($_SESSION['logged_in']) 		$logged_in = $_SESSION['logged_in'];
	if($_SESSION['role_id']) 		$role_id = $_SESSION['role_id'];
	if($_SESSION['user_id']) 		$user_id = $_SESSION['user_id'];
	if($_SESSION['is_customer']) 	$is_customer = $_SESSION['is_customer'];
	if($_SESSION['is_manager']) 	$is_manager = $_SESSION['is_manager'];
	if($_SESSION['is_admin']) 		$is_admin = $_SESSION['is_admin'];
}
//Show protected data...

?>