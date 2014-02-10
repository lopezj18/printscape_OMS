<?php //test_functions.php
function check_login($username, $password){

		require_once('db_info.php');

		//figure this shit out...
		$mysqli = new mysqli($hname, $uname, $pass, $db);

		//call the run_my_query()function from that include
		$query = "SELECT * FROM users 
			WHERE username='$username'
			AND password='$password'
			";
		
		//Execute query
		if(!$result = $mysqli->query($query)){
			echo "Query Error: " . $mysqli->error;
		}

		//if it selected a row they typed the correct username and password
		//if ($theirname =='boss')&&($theirpass=='boss')){
		
		//get the pointer to point at the first row retried by the select
		//$result -> data_seek(0);
		
		if($row = $result -> fetch_assoc()){
		
			//do goo thing :remember that they're logged in 
			//echo "Correct!";
			
			//start a session to enable us to store session vars, which other pages cannot read
			session_start();
			//store the user's name in a session var
			$_SESSION['username'] = $row['username'];
			$_SESSION['logged_in'] = true;
			//redirect them to view home page
		header('Location:admin-recent-orders.php');
		//otherwise
		}else{
			//send them back and trigger a message
			$status = "<div class='invalid-user'>Incorrect User Name or Password!!</div>";
		}
	return $status;
}

function run_my_query($query){
	//run a query to retrive all row (record) data from our table SELECT *. We'll store that in a var (array)
	require_once('db_info.php');

	//figure this shit out...
	$mysqli = new mysqli($hname, $uname, $pass, $db);
	//for troubleshooting, this willmake a custom message apear if line 3 had a problem
	if($mysqli -> connect_errno){
		echo "connection problem on line 9:".$mysqli->connect_error;
	}
}

function get_userinfo($users){
	for($i=0; $i<(4); $i++){
		$results .="<tr><td>".$users[$i]['user_id']."</td>";
		$results .="<td>".$users[$i]['username']."</td>";
		$results .="<td>".$users[$i]['first_name']."</td>";
		$results .="<td>".$users[$i]['last_name']."</td>";
		$results .="<td>".$users[$i]['email']."</td>";
		$results .="<td>".$users[$i]['date_created']->format('m-d-Y')."</td></tr>";
	}
	return $results;
}

function get_clients($customers){

	for($i=0; $i<(2); $i++){
		$results .="<tr><td>".$customers[$i]['user_id']."</td>";
		$results .="<td>".$customers[$i]['company_name']."</td>";
		$results .="<td>".$customers[$i]['address_1']."</td>";
		$results .="<td>".$customers[$i]['address_2']."</td>";
		$results .="<td>".$customers[$i]['city']."</td>";
		$results .="<td>".$customers[$i]['state']."</td>";
		$results .="<td>".$customers[$i]['zip']."</td>";
		$results .="<td>".$customers[$i]['phone_number']."</td>";
		$results .="<td>".$customers[$i]['date_created']->format('m-d-Y')."</td></tr>";
	}
	return $results;
}

function get_order($jobs){
	for($i=0; $i<(3); $i++){

		$results .="<tr><td>".$jobs[$i]['job_id']."</td>";
		$results .="<td>".$jobs[$i]['customer_name']."</td>";
		$results .="<td>".$jobs[$i]['order_name']."</td>";
		$results .="<td>".$jobs[$i]['type']."</td>";
		$results .="<td>".$jobs[$i]['due_date']->format('m-d-Y')."</td>";
		$results .="<td>".$jobs[$i]['date_submited']->format('m-d-Y')."</td>";
		$results .="<td>".$jobs[$i]['status']."</td>";
		$results .="<td>".$jobs[$i]['file']."</td>";

		$instructions = $jobs[$i]['instructions'];
		$max_length = 30;
		if(strlen($instructions) > $max_length){
			echo "max length exceeded";
			$excerpt = preg_replace('/\s+?(\S+)?$/', '', substr($instructions, 0, $max_length));
			$results .="<td class='expandable_row'>
				<div class='excerpt'>".$excerpt."</div>
				<div class='full_instructions'>".$instructions."</div>
				<img class='expandable_arrow' src='images/expandable_arrow.png' alt='hover to expand'/>
			</td>";
		}
		else $results .="<td>".$jobs[$i]['instructions']."</td>";

		$results .="<td>".$jobs[$i]['delete']."</td></tr>";
	}
	return $results;
}

function sanitize($variable){
	if(get_magic_quotes_gpc()) $variable = stripslashes($variable);
	$variable = htmlspecialchars($variable);
	return $variable;
}

function insert_user($user){

	//Set up our vars for the query
	$id 		 	= $user['id'];
	$username		= $user['username'];
	$password 		= $user['password'];
	$first_name 	= $user['first_name'];
	$last_name		= $user['last_name'];
	$email			= $user['email'];
	$role_id		= $user['role_id'];
	$date_created 	= $user['date_created'];

	//Get info to connect to the database
	require('db_info.php');

	//Create db connection
	$mysqli = new mysqli($hname, $uname, $pass, $db);

	//Prepare insert user query
	$query = "INSERT INTO users(id, username, password, first_name, last_name, email, role_id, date_created) 
				VALUES('', '$username', '$password', '$first_name', '$last_name', '$email', '$role_id', '$date_created')";

	//Execute query
	if(!$result = $mysqli->query($query)){
		echo "Query Error: " . $mysqli->error ."<br/>";
	} else {
		echo "User added successfully! <br/>";
	}

	mysqli_close($mysqli);
}

function insert_customer($customer){

	//Set up our vars for the query
	$id 		= $customer['id'];
	$user_id 	= $customer['user_id'];
	$company 	= $customer['company'];
	$address 	= $customer['address'];
	$city 		= $customer['city'];
	$state		= $customer['state'];
	$zip		= $customer['zip'];
	$phone 		= $customer['phone'];

	//Get info to connect to the database
	require('db_info.php');

	//Create db connection
	$mysqli = new mysqli($hname, $uname, $pass, $db);

	//Prepare insert customer query
	$query = "INSERT INTO customers (id, user_id, company, address, city, state, zip, phone) 
				VALUES ('', '$user_id', '$company', '$address', '$city', '$state', '$zip', '$phone')";

	//Execute query
	if(!$result = $mysqli->query($query)){
		echo "Query Error: " . $mysqli->error;
	} else {
		echo "Customer added successfully!";
	}
}

function insert_order($order){

	//Set up our vars for the query
	$id 			= $order['id'];
	$type_id 		= $order['type_id'];
	$due_date 		= $order['due_date'];
	$date_submitted	= $order['date_submitted'];
	$status_id		= $order['status_id'];
	$instructions 	= $order['instructions'];

	//Get info to connect to the database
	require('db_info.php');

	//Create db connection
	$mysqli = new mysqli($hname, $uname, $pass, $db);

	//Prepare insert order query
	$query = "INSERT INTO orders (id, type_id, due_date, date_submitted, status_id, instructions) 
				VALUES ('', '$type_id', '$due_date', '$date_submitted', '$status_id', '$instructions')";

	//Execute query
	if(!$result = $mysqli->query($query)){
		echo "Query Error: " . $mysqli->error;
	} else {
		echo "Your order was added successfully!";
	}
}

function insert_file($file){

	//Set up our vars for the query
	$id 		= $file['id'];
	$order_id 	= $file['order_id'];
	$filename 	= $file['filename'];

	//Get info to connect to the database
	require('db_info.php');

	//Create db connection
	$mysqli = new mysqli($hname, $uname, $pass, $db);

	//Prepare insert file query
	$query = "INSERT INTO files (id, order_id, filename)
			VALUES('', '$order_id', '$filename')";

	//Execute query
	if(!$result = $mysqli->query($query)){
		echo "Query Error: " . $mysqli->error;
	} else {
		echo "Your order was added successfully!";
	}
}

/* BEGIN STATIC DATA FUNCTIONS */

function insert_roles(){
	$roles = array();

	$i=0;

	$roles[$i]['id']	= $i;
	$roles[$i]['name']	= 'Nothing';

	$i++;

	$roles[$i]['id']	= $i;
	$roles[$i]['name']	= 'Customer';

	$i++;

	$roles[$i]['id']	= $i;
	$roles[$i]['name']	= 'Order Manager';

	$i++;

	$roles[$i]['id']	= $i;
	$roles[$i]['name']	= 'Administrator';

	//Get info to connect to the database
	require('db_info.php');

	//Create db connection
	$mysqli = new mysqli($hname, $uname, $pass, $db);

	//Setup loop to insert each type
	for($j = 0; $j < count($roles); $j++){
		$id 	= $roles[$j]['id']; 
		$name 	= $roles[$j]['name'];

		$query = "INSERT INTO roles (id, name)
				VALUES('$id', '$name')";

		if(!$result = $mysqli->query($query)){
			echo "Query Error: " . $mysqli->error;
		} else {
			echo "Your order was added successfully!";
		}
	}

	//Close db connection
	mysqli_close($mysqli);
}

function insert_types(){

	//Set up the types array with whatever types we want to offer

	$types = array();

	$i=0;

	$types[$i]['id'] 	= $i;
	$types[$i]['name']	= 'Color';

	$i++;

	$types[$i]['id'] 	= $i;
	$types[$i]['name']	= 'Black and White';

	$i++;

	$types[$i]['id'] 	= $i;
	$types[$i]['name']	= 'Wraps and Vinyl';

	$i++;

	$types[$i]['id']	= $i;
	$types[$i]['name']	= 'Multi-layered';

	$i++;

	$types[$i]['id'] 	= $i;
	$types[$i]['name']	= 'ADA Signage';

	$i++;

	$types[$i]['id'] 	= $i;
	$types[$i]['name']	= 'Web Related';

	//Get info to connect to the database
	require('db_info.php');

	//Create db connection
	$mysqli = new mysqli($hname, $uname, $pass, $db);

	//Setup loop to insert each type
	for($j = 0; $j < count($types); $j++){
		$id 	= $types[$j]['id']; 
		$name 	= $types[$j]['name'];

		$query = "INSERT INTO types (id, name)
				VALUES('', '$name')";

		if(!$result = $mysqli->query($query)){
			echo "Query Error: " . $mysqli->error;
		} else {
			echo "Your order was added successfully!";
		}
	}

	//Close db connection
	mysqli_close($mysqli);
}

function insert_statuses(){
	$statuses = array();

	$i=0;

	$statuses[$i]['id']		= $i;
	$statuses[$i]['name']	= 'Pending';

	$i++;

	$statuses[$i]['id']		= $i;
	$statuses[$i]['name']	= 'Received';

	$i++;

	$statuses[$i]['id']		= $i;
	$statuses[$i]['name']	= 'Printing';

	$i++;

	$statuses[$i]['id']		= $i;
	$statuses[$i]['name']	= 'Packaging';

	$i++;

	$statuses[$i]['id']		= $i;
	$statuses[$i]['name']	= 'Shipped';

	//Get info to connect to the database
	require('db_info.php');

	//Create db connection
	$mysqli = new mysqli($hname, $uname, $pass, $db);

	//Setup loop to insert each type
	for($j = 0; $j < count($statuses); $j++){
		$id 	= $statuses[$j]['id']; 
		$name 	= $statuses[$j]['name'];

		$query = "INSERT INTO statuses (id, name)
				VALUES('', '$name')";

		if(!$result = $mysqli->query($query)){
			echo "Query Error: " . $mysqli->error;
		} else {
			echo "Your order was added successfully!";
		}
	}

	//Close db connection
	mysqli_close($mysqli);
}

function insert_static_data(){
	insert_roles();
	insert_types();
	insert_statuses();
}

/* END STATIC DATA FUNCTIONS */

?>