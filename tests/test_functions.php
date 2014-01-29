<?php //test_functions.php

function insert_users($users){
	include("db_info.php");
	
	//connect to the database
	$mysqli = new mysqli($hname, $uname, $pass, $db);
	if($mysqli->connect_errorno){
		echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	}

	//set up query and use it
	$query = "SELECT username, password FROM users WHERE username = '$username'";
	
	if(!$result = $mysqli->query($query)){
		echo "Query Error: " . $mysqli->error;
	} else {
		//assign results
		while($row = $result->fetch_assoc()){
			$current_user['username'] = $row['username'];
			$current_user['password'] = $row['password'];
		}
		//free result set
		$result->free();
	}
	//close db connection
	$mysqli->close();

	//check for matches
	if($current_user['username'] == $username && $current_user['password'] == $password){
		//set session variables and redirect back to main page
		session_start();
		$_SESSION['username'] = $current_user['username'];
		//$webpath = get_webpath();
		header("Location: ./main.php");
		return TRUE;
	}
	else{
		return FALSE;
	}
}

function test1(){
	$users = new array();
	$users[0]['user_id'] => 0;
	$users[0]['username'] => 'jsmith';
	$users[0]['first_name'] => 'John';
	$users[0]['last_name'] => 'Smith';
	$users[0]['email'] => 'jsmith@testcompany.com';
	$users[0]['date_created'] => new DateTime("2014-01-02 11:14:15");

}

function get_users($users, $page_number){

	for($i=0; $i<(20*$page_number); $i++){
		$results = "<tr><td>".$user['user_id']."</td><td>".$user['username']."</tr>";
	}
	return $results;
}
?>