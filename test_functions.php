<?php 
function users(){
	$users = array();
	$users[0]['user_id'] = 0;
	$users[0]['username'] = 'jsmith';
	$users[0]['first_name'] = 'John';
	$users[0]['last_name'] = 'Smith';
	$users[0]['email'] = 'jsmith@testcompany.com';
	$users[0]['date_created'] = new DateTime("2014-01-02 11:14:15");

}

function customers(){
	$customers = array();
	$customers[0]['user_id'] = 0;
	$customers[0]['user_id'] = 'Cool Company';
	$customers[0]['email'] = 'jsmith@testcompany.com';
	$customers[0]['address_1'] = '2255 Example rd';
	$customers[0]['address_2'] = 'Building 3';
	$customers[0]['city'] = 'Smith';
	$customers[0]['state'] = 'PA';
	$customers[0]['zip'] = '15071';
	$customers[0]['phone_number'] = '440-132-1254';
	$customers[0]['date_created'] = new DateTime("2014-01-02 11:14:15");
	
	$customers = array();
	$customers[1]['user_id'] = 1;
	$customers[1]['user_id'] = 'Cool Company';
	$customers[1]['email'] = 'jsmith@testcompany.com';
	$customers[1]['address_1'] = '2255 Example rd';
	$customers[1]['address_2'] = 'Building 3';
	$customers[1]['city'] = 'Smith';
	$customers[1]['state'] = 'PA';
	$customers[1]['zip'] = '15171';
	$customers[1]['phone_number'] = '441-132-1254';
	$customers[1]['date_created'] = new DateTime("2014-01-02 11:14:15");

}

function jobs(){
	$jobs[0]['job_id'] = 1;
	$jobs[0]['customer_name'] = 'joe joehanson';
	$jobs[0]['order_name'] = 'meow';
	$jobs[0]['type'] = 'carwrap';
	$jobs[0]['due_date'] = new DateTime("2014-01-06 11:14:15");
	$jobs[0]['date_submited'] = new DateTime("2014-01-02 11:14:15");
	$jobs[0]['status'] = 'pending';
	$jobs[0]['file'] = 'orders/printfiles/car.pdf';
	$jobs[0]['instructions'] = 'blahhh blah';
	$jobs[0]['delete'] = 'delete';
	
	$jobs[1]['job_id'] = 1;
	$jobs[1]['customer_name'] = 'joe joehanson';
	$jobs[1]['order_name'] = 'meow';
	$jobs[1]['type'] = 'carwrap';
	$jobs[1]['due_date'] = new DateTime("2014-01-06 11:14:15");
	$jobs[1]['date_submited'] = new DateTime("2014-01-02 11:14:15");
	$jobs[1]['status'] = 'pending';
	$jobs[1]['file'] = 'orders/printfiles/car.pdf';
	$jobs[1]['instructions'] = 'blahhh blah';
	$jobs[1]['delete'] = 'delete';
	
	$jobs[2]['job_id'] = 1;
	$jobs[2]['customer_name'] = 'joe joehanson';
	$jobs[2]['order_name'] = 'meow';
	$jobs[2]['type'] = 'carwrap';
	$jobs[2]['due_date'] = new DateTime("2014-01-06 11:14:15");
	$jobs[2]['date_submited'] = new DateTime("2014-01-02 11:14:15");
	$jobs[2]['status'] = 'pending';
	$jobs[2]['file'] = 'orders/printfiles/car.pdf';
	$jobs[2]['instructions'] = ' blah';
	$jobs[2]['delete'] = 'delete';
return $jobs;
}

?>


<?php /*?>
function check_login($user, $password){
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
}<?php */?>
