<?php //test_functions.php

function insert_user($user){
	//Sample insert query
	$query = "INSERT INTO users (id, username, password, first_name, last_name, email, role_id, date_created) 
				VALUES ($id, $username, $password, $first_name, $last_name, $email, $role_id, $date_created)";

	if(!$result = $mysqli->query($query)){
		echo "Query Error: " . $mysqli->error;
	} else {
		echo "User added successfully!";
	}
}

//id, username, password, first_name, last_name, email, role_id, date_created

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

function test_users(){
	$users =  array();

	$i=0;

	$users[$i]['id'] => $i;
	$users[$i]['username'] => 'jsmith';
	$users[$i]['password'] => '123';
	$users[$i]['first_name'] => 'John';
	$users[$i]['last_name'] => 'Smith';
	$users[$i]['email'] => 'jsmith@testuser.com';
	$users[$i]['role_id'] => 1;
	$users[$i]['date_created'] => new DateTime("2014-01-02 11:14:15");

	$i++;

	$users[$i]['id'] => $i;
	$users[$i]['username'] => 'alincoln';
	$users[$i]['password'] => '123';
	$users[$i]['first_name'] => 'Abe';
	$users[$i]['last_name'] => 'Lincoln';
	$users[$i]['email'] => 'abe@testuser.com';
	$users[$i]['role_id'] => 1;
	$users[$i]['date_created'] => new DateTime("1950-10-23 1:23:07");

	$i++;

	$users[$i]['id'] => $i;
	$users[$i]['username'] => 'jj';
	$users[$i]['password'] => '123';
	$users[$i]['first_name'] => 'Jimmy';
	$users[$i]['last_name'] => 'Johns';
	$users[$i]['email'] => 'jj@testuser.com';
	$users[$i]['role_id'] => 1;
	$users[$i]['date_created'] => new DateTime("2050-11-13 10:47:05");

	$i++;

	$users[$i]['id'] => $i;
	$users[$i]['username'] => 'dingus';
	$users[$i]['password'] => '123';
	$users[$i]['first_name'] => 'Steve';
	$users[$i]['last_name'] => 'Brule';
	$users[$i]['email'] => 'ya_dingus@testuser.com';
	$users[$i]['role_id'] => 1;
	$users[$i]['date_created'] => new DateTime("2014-01-02 11:14:15");

	$i++;

	$users[$i]['id'] => $i;
	$users[$i]['username'] => 'jif';
	$users[$i]['password'] => '123';
	$users[$i]['first_name'] => 'peanut';
	$users[$i]['last_name'] => 'butter';
	$users[$i]['email'] => 'mmmmm@testuser.com';
	$users[$i]['role_id'] => 1;
	$users[$i]['date_created'] => new DateTime("2006-06-07 2:30:00");
}

function test_roles(){
	$roles = array();
	
	$roles[0]['id'] => 0;
	$roles[0]['name'] => 'Nothing';

	$roles[1]['id'] => 1;
	$roles[1]['name'] => 'Customer';

	$roles[2]['id'] => 2;
	$roles[2]['name'] => 'Order Manager';

	$roles[3]['id'] => 3;
	$roles[3]['name'] => 'Administrator';
}

function test_customers(){
	$customers = array();

	$i=0;

	$customers[$i]['id'] => $i;
	$customers[$i]['user_id'] => 0;
	$customers[$i]['company'] => 'Jimmy Johns';
	$customers[$i]['address'] => '123 Somewhere Dr';
	$customers[$i]['city'] => 'Carnegie';
	$customers[$i]['state'] => 'PA';
	$customers[$i]['zip'] => '15106';
	$customers[$i]['phone'] => '1234567890';

	$i++;

	$customers[$i]['id'] => $i;
	$customers[$i]['user_id'] => 2;
	$customers[$i]['company'] => 'Jimmy Johns';
	$customers[$i]['address'] => '123 Somewhere Else Dr';
	$customers[$i]['city'] => 'Robinson Twp';
	$customers[$i]['state'] => 'PA';
	$customers[$i]['zip'] => '15205';
	$customers[$i]['phone'] => '0987654321';

	$i++;

	$customers[$i]['id'] => $i;
	$customers[$i]['user_id'] => 1;
	$customers[$i]['company'] => 'Vampire Huntering Inc';
	$customers[$i]['address'] => 'Corner of 4 Scores and 7 Yearsagro';
	$customers[$i]['city'] => 'Gettysburg';
	$customers[$i]['state'] => 'PA';
	$customers[$i]['zip'] => '17325';
	$customers[$i]['phone'] => '000000000';

	$i++;

	$customers[$i]['id'] => $i;
	$customers[$i]['user_id'] => 3;
	$customers[$i]['company'] => 'Check it out!';
	$customers[$i]['address'] => 'Right behind ya, ya dingus';
	$customers[$i]['city'] => 'Pretzaville USA';
	$customers[$i]['state'] => 'CA';
	$customers[$i]['zip'] => '58392';
	$customers[$i]['phone'] => '555867954';

	$i++;

	$customers[$i]['id'] => $i;
	$customers[$i]['user_id'] => 4;
	$customers[$i]['company'] => 'J.M. Smucker Company';
	$customers[$i]['address'] => 'The J.M. Smucker Company';
	$customers[$i]['city'] => 'Orrville';
	$customers[$i]['state'] => 'OH';
	$customers[$i]['zip'] => '44667';
	$customers[$i]['phone'] => '18002838915';

}

function test_status(){
	$status = array();

	$status[0]['id'] = 0;
	$status[0]['name'] = 'Pending';

	$status[0]['id'] = 1;
	$status[0]['name'] = 'Received';

	$status[0]['id'] = 2;
	$status[0]['name'] = 'Printing';

	$status[0]['id'] = 3;
	$status[0]['name'] = 'Packaging';

	$status[0]['id'] = 4;
	$status[0]['name'] = 'Shipped';
}

function test_orders(){

	$orders = array();

	$i = 0;

	$orders[$i]['id'] = ;
	$orders[$i]

}

function get_users($users, $page_number){
	for($i=0; $i<(20*$page_number); $i++){
		$results = "<tr><td>".$user['user_id']."</td><td>".$user['username']."</tr>";
	}
	return $results;
}

?>