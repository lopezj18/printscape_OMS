<?php 
function test1(){
	$users = array();
	$users[0]['user_id'] = 0;
	$users[0]['username'] = 'jsmith';
	$users[0]['first_name'] = 'John';
	$users[0]['last_name'] = 'Smith';
	$users[0]['email'] = 'jsmith@testcompany.com';
	$users[0]['date_created'] = new DateTime("2014-01-02 11:14:15");

}

function test2(){
	$jobs = array();
	$jobs[0]['job_id'] = 0;
	$jobs[0]['type'] = 'jsmith';
	$jobs[0]['location'] = 'John';
	$jobs[0]['last_name'] = 'Smith';
	$jobs[0]['email'] = 'jsmith@testcompany.com';
	$jobs[0]['date_created'] = new DateTime("2014-01-02 11:14:15");
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
