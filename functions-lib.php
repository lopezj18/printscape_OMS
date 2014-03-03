<?php //functions-lib.php
function sanitize($variable){
	if(get_magic_quotes_gpc()) $variable = stripslashes($variable);
	$variable = htmlspecialchars($variable);
	return $variable;
}

function check_login($username, $password){

		require_once('db_info.php');

		$mysqli = new mysqli($hname, $uname, $pass, $db);

		$query = "SELECT users.id as id,
					users.username as username,
					users.first_name as first_name,
					user_roles.role_id as role_id
				FROM users
					LEFT JOIN user_roles ON user_roles.user_id=users.id
				WHERE username='$username'
				AND password='$password'";
		
		//Execute query
		if(!$result = $mysqli->query($query)){
			echo "Query Error: " . $mysqli->error;
		}

		//if it selected a row they typed the correct username and password
		//if ($theirname =='boss')&&($theirpass=='boss')){
		
		//get the pointer to point at the first row retried by the select
		//$result -> data_seek(0);
		
		if($row = $result -> fetch_assoc()){
			//start a session to enable us to store session vars, which other pages cannot read
			session_start();
			//store the user's name in a session var
			$_SESSION['username'] = $row['username'];
			$_SESSION['logged_in'] = true;
			$_SESSION['first_name'] = $row['first_name'];
			$_SESSION['role_id'] = $row['role_id'];
			$_SESSION['user_id'] = $row['id'];
			//Set role booleans
			switch($row['role_id']){
				case 1:
					$_SESSION['is_customer'] = true;
					break;
				case 2:
					$_SESSION['is_manager'] = true;
					break;
				case 3:
					$_SESSION['is_admin'] = true;
					break;
			}
			//redirect them to view home page
			header('Location:admin-recent-orders.php');
			//otherwise
		}else{
			//send them back and trigger a message
			$status = "<div class='invalid-user'>Incorrect User Name or Password!!</div>";
		}
	return $status;
}

function check_customer_role($customer_role){
	if($customer_role == 1){
		return true;
	}
	return false;	
}

function check_manager_role($manager_role){
	if($manager_role == 2){
		return true;
	}
	return false;	
}

function check_administrator_role($administrator_role){
	if($administrator_role == 3){
		return true;
	}
	return false;	
}

function build_users_table($users, $tabletype){
	
		$results .="<table class='tftable' border='1'>";
		$results .="<tr><th>User Id</th>";
		$results .="<th>Username</th>";
		$results .="<th>First Name</th>";
		$results .="<th>Last Name</th>";
		$results .="<th>Email Address</th>";
		$results .="<th>Date Created</th>";
		if($tabletype == 'delete'){
			$results .="<th>Delete</th>";
		}
		$results .="</tr>";
		
	for($i=0; $i<count($users); $i++){
		$results .="<tr><td>".$users[$i]['id']."</td>";
		$results .="<td>".$users[$i]['username']."</td>";
		$results .="<td>".$users[$i]['first_name']."</td>";
		$results .="<td>".$users[$i]['last_name']."</td>";
		$results .="<td>".$users[$i]['email']."</td>";
		$results .="<td>".date ('m-d-Y', strtotime($users[$i]['date_created']))."</td>";
		
		if($tabletype == 'delete'){
			$results .="<td><input type='checkbox' name='deletecheckbox[$i]' value='".$users[$i]['id']."'/></td>";
		}
		
		$results .="</tr>";
		
	}
	$results .="</table>";
		if($tabletype == 'delete'){
			$results .="<input type='submit' name='delete' value='Delete' class='btn'/>";
		}
	return $results;
}

function build_customers_table($customers, $tabletype){
	
	$results .="<table class='tftable' border='1'>";
		$results .="<tr><th>User Id</th>";
		$results .="<th>Comapny</th>";
		$results .="<th>Address 1</th>";
		$results .="<th>Address 2</th>";
		$results .="<th>City</th>";
		$results .="<th>State</th>";
		$results .="<th>Zip</th>";
		$results .="<th>Phone Number</th>";
		$results .="<th>Date Created</th>";
		if($tabletype == 'delete'){
			$results .="<th>Delete</th>";
		}
		$results .="</tr>";
	
	
	for($i=0; $i<count($customers); $i++){
		$results .="<tr><td>".$customers[$i]['id']."</td>";
		$results .="<td>".$customers[$i]['company']."</td>";
		$results .="<td>".$customers[$i]['address1']."</td>";
		$results .="<td>".$customers[$i]['address2']."</td>";
		$results .="<td>".$customers[$i]['city']."</td>";
		$results .="<td>".$customers[$i]['state']."</td>";
		$results .="<td>".$customers[$i]['zip']."</td>";
		$results .="<td>".$customers[$i]['phone']."</td>";
		$results .="<td>".date ('m-d-Y', strtotime($customers[$i]['date_created']))."</td>";
		
		if($tabletype == 'delete'){
			$results .="<td><input type='checkbox' name='deletecheckbox[$i]' value='".$customers[$i]['id']."'/></td>";
	}
		$results .="</tr>";
	}
	$results .="</table>";
		if($tabletype == 'delete'){
			$results .="<input type='submit' name='delete' value='Delete' class='btn'/>";
		}
	return $results;
}

function build_orders_table($orders, $tabletype){
	
		
	$results .="<table class='tftable' border='1'>";
		$results .="<tr><th>Order #</th>";
		$results .="<th>Customer Name</th>";
		$results .="<th>Company</th>";
		$results .="<th>Type</th>";
		$results .="<th>Due Date</th>";
		$results .="<th>Date Submitted</th>";
		$results .="<th>Status</th>";
		$results .="<th>File</th>";
		$results .="<th>Special Instructions</th>";
	if($tabletype == 'delete'){
			$results .="<th>Delete</th>";
		}
		$results .="</tr>";
	for($i=0; $i<count($orders); $i++){
		$results .="<tr><td>".$orders[$i]['id']."</td>";
		$results .="<td>".$orders[$i]['customer_name']."</td>";
		$results .="<td>".$orders[$i]['company']."</td>";
		$results .="<td>".$orders[$i]['type_id']."</td>";
		$results .="<td>".date ('m-d-Y', strtotime($orders[$i]['due_date']))."</td>";
		$results .="<td>".date ('m-d-Y', strtotime($orders[$i]['date_submitted']))."</td>";
		$results .="<td>".$orders[$i]['status']."</td>";
		$results .="<td>".$orders[$i]['file']."</td>";

		$instructions = $orders[$i]['instructions'];
		$max_length = 30;
		if(strlen($instructions) > $max_length){
			$excerpt = preg_replace('/\s+?(\S+)?$/', '', substr($instructions, 0, $max_length));
			$results .="<td class='expandable_row'>
				<div class='excerpt'>".$excerpt."</div>
				<div class='full_instructions'>".$instructions."</div>
				<img class='expandable_arrow' src='images/expandable_arrow.png' alt='hover to expand'/>
			</td>";
		}
		else $results .="<td>".$orders[$i]['instructions']."</td>";
		
		if($tabletype == 'delete'){
			$results .="<td><input type='checkbox' name='deletecheckbox[$i]' value='".$orders[$i]['id']."'/></td>";
		}
		$results .="</tr>";
	}
		$results .="</table>";
		if($tabletype == 'delete'){
		$results .="<input type='submit' name='delete' value='delete' class='btn'/>";
	}
	return $results;
}

function retrieve_orders($sort){
	require('db_info.php');

	//Create db connection
	$mysqli = new mysqli($hname, $uname, $pass, $db);

	//Prepare insert customer query
	$query = "SELECT orders.id as order_id,
					orders.due_date as due_date,
					orders.date_submitted as date_submitted,
					orders.instructions as instructions,
					types.name as type_name,
					statuses.name as status_name,
					users.first_name as first_name,
					users.last_name as last_name,
					customers.company as company
			FROM user_orders
				LEFT JOIN orders ON orders.id=user_orders.order_id
				LEFT JOIN types ON types.id=orders.type_id
				LEFT JOIN statuses ON statuses.id=orders.status_id
				LEFT JOIN users ON users.id=user_orders.user_id
				LEFT JOIN customers ON customers.user_id=users.id
			ORDER BY $sort DESC";

	//Execute query
	if(!$result = $mysqli->query($query)){
		$message['error'] = 1;
		$message['status'] = "Query Error: " . $mysqli->error ."<br/>";
		echo $message;
		return $message;
	}
	else {
		$message['error'] = 0;

		$orders = array();
		$i=0;
		while($row = $result->fetch_assoc()){
			$orders[$i]['id']		 		.= $row['orderId'];
			$orders[$i]['customer_name']	.= $row['firstName']." ".$row['lastName'];
			$orders[$i]['company']			.= $row['company'];
			$orders[$i]['type_id'] 			.= $row['typeName'];
			$orders[$i]['due_date'] 		.= $row['dueDate'];
			$orders[$i]['date_submitted'] 	.= $row['dateSubmitted'];
			$orders[$i]['status']			.= $row['statusName'];
			$orders[$i]['instructions'] 	.= $row['instructions'];
			$i++;
		}
	}
	return $orders;
}


function retrieve_customers(){
	require('db_info.php');

	//Create db connection
	$mysqli = new mysqli($hname, $uname, $pass, $db);

	//Prepare insert customer query
	$query = "SELECT customers.id as id,
					customers.company as company,
					customers.address1 as address1,
					customers.address2 as address2,
					customers.city as city,
					customers.state as state,
					customers.zip as zip,
					customers.phone as phone,
					users.date_created as date_created
			FROM customers
			JOIN users ON users.id=customers.user_id";

	//Execute query
	if(!$result = $mysqli->query($query)){
		echo "Query Error: " . $mysqli->error;
	}

	$customers = array();
	$i=0;
	while($row = $result->fetch_assoc()){
		$customers[$i]['id']		 	.= $row['id'];
		$customers[$i]['company']		.= $row['company'];
		$customers[$i]['address1'] 		.= $row['address1'];
		$customers[$i]['address2'] 		.= $row['address2'];
		$customers[$i]['city'] 			.= $row['city'];
		$customers[$i]['state']		 	.= $row['state'];
		$customers[$i]['zip']			.= $row['zip'];
		$customers[$i]['phone']			.= $row['phone'];
		$customers[$i]['date_created'] 	.= $row['date_created'];
		$i++;
	}

	return $customers;
}

function retrieve_customer_info($user_id){
	require('db_info');

	//Create db connection
	$mysli = new $myslqi($hname, $uname, $pass, $db);

	//Prepare query
	$query = "SELECT *
			FROM customers
			LEFT JOIN users on users.id = customers.user_id
			WHERE users.id = $user_id";

	//Execute query		
	if(!$result = $mysqli->query($query)){
		echo "Query Error: ".$mysqli->error;
	}
	else{
		while($row = $result->fetch_assoc()){
			$customer_info['user_id'] 		= $row['user_id'];
			$customer_info['customer_id'] 	= $row['customer_id'];
			$customer_info['company'] 		= $row['company'];
			$customer_info['address1'] 		= $row['address1'];
			$customer_info['address2'] 		= $row['address2'];
			$customer_info['city'] 			= $row['city'];
			$customer_info['state'] 		= $row['state'];
			$customer_info['zip'] 			= $row['zip'];
			$customer_info['phone'] 		= $row['phone'];
		}
	}
	return $customer_info;
}

function retrieve_users(){
	require('db_info.php');

	//Create db connection
	$mysqli = new mysqli($hname, $uname, $pass, $db);

	//Prepare insert customer query
	$query = "SELECT users.id as id,
					users.username as username,
					users.first_name as first_name,
					users.last_name as last_name,
					users.email as email,
					users.date_created as date_created
			FROM users";

	//Execute query
	if(!$result = $mysqli->query($query)){
		echo "Query Error: " . $mysqli->error;
	}

	$users = array();
	$i=0;
	while($row = $result->fetch_assoc()){
		$users[$i]['id']		 	.= $row['id'];
		$users[$i]['username']		.= $row['username'];
		$users[$i]['first_name'] 	.= $row['first_name'];
		$users[$i]['last_name'] 	.= $row['last_name'];
		$users[$i]['email'] 		.= $row['email'];
		$users[$i]['date_created']	.= $row['date_created'];
		$i++;
	}

	return $users;
}

function retrieve_order_types(){
	require_once('db_info.php');

		//figure this shit out...
		$mysqli = new mysqli($hname, $uname, $pass, $db);

		//call the run_my_query()function from that include
		$query = "SELECT * FROM types";
		
		//Execute query
		if(!$result = $mysqli->query($query)){
			echo "Query Error: " . $mysqli->error;
		}
		$types = array();
		$i = 0;
		while($row = $result -> fetch_assoc()){
			$types[$i]['id'] .= $row['id'];
			$types[$i]['name'] .= $row['name'];
		$i++;
		}
	return $types;
}

function build_type_options($types){
	for($i=0; $i<count($types); $i++){

		$results .="<option value=".$types[$i]['id'].">".$types[$i]['name']."</option>";
	}
			
	return $results;
}


function retrieve_role_types(){
	require_once('db_info.php');

		//figure this shit out...
		$mysqli = new mysqli($hname, $uname, $pass, $db);

		//call the run_my_query()function from that include
		$query = "SELECT * FROM roles
		WHERE id > 1";
		
		//Execute query
		if(!$result = $mysqli->query($query)){
			echo "Query Error: " . $mysqli->error;
		}
		$roles = array();
		$i = 0;
		while($row = $result -> fetch_assoc()){
			$roles[$i]['id'] .= $row['id'];
			$roles[$i]['name'] .= $row['name'];
		$i++;
		}
	return $roles;
}

function build_role_options($roles){
	for($i=0; $i<count($roles); $i++){

		$results .="<option value=".$roles[$i]['id'].">".$roles[$i]['name']."</option>";
	}
			
	return $results;
}

function insert_user($user){

	//Set up our vars for the query
	$username		= $user['username'];
	$password 		= $user['password'];
	$first_name 	= $user['first_name'];
	$last_name		= $user['last_name'];
	$email			= $user['email'];
	$role_id		= $user['role_id'];
	$date_created 	= date("m-d-Y H:i:s");


	//Get info to connect to the database
	require('db_info.php');

	//Create db connection
	$mysqli = new mysqli($hname, $uname, $pass, $db);

	//Prepare insert user query
	$query = "INSERT INTO users(id, username, password, first_name, last_name, email, date_created) 
				VALUES('', '$username', '$password', '$first_name', '$last_name', '$email', '$date_created')";

	//Execute query
	if(!$result = $mysqli->query($query)){
		$message['error'] = 1;
		$message['status'] = "Query Error: " . $mysqli->error ."<br/>";
	} else {
		$message['error'] = 0;
		$message['status'] = "User added successfully! <br/>";
		$user_id = $mysqli->insert_id;
	}

	if($message['error'] == 0){
		//Prepare insert user query
		$query = "INSERT INTO user_roles(user_id, role_id) 
					VALUES('$user_id', '$role_id')";

		//Execute query
		if(!$result = $mysqli->query($query)){
			$message['error'] = 1;
			$message['status'] = "Query Error: " . $mysqli->error ."<br/>";
		} else {
			$message['error'] = 0;
			$message['status'] = "User role assigned <br/>";
		}
	}

	mysqli_close($mysqli);
return $user_id;

}

function insert_customer($customer){
	$customer_role_id = 1;
	
	$username		= $customer['username'];
	$password 		= $customer['password'];
	$first_name 	= $customer['first_name'];
	$last_name		= $customer['last_name'];
	$email			= $customer['email'];
	$role_id		= $customer_role_id;
	$date_created 	= $customer['date_created'];
	$company 		= $customer['company'];
	$address1 		= $customer['address1'];
	$address2 		= $customer['address2'];
	$city 			= $customer['city'];
	$state			= $customer['state'];
	$zip			= $customer['zip'];
	$phone 			= $customer['phone'];


	$id = insert_user($user);

	//Get info to connect to the database
	require('db_info.php');

	//Create db connection
	$mysqli = new mysqli($hname, $uname, $pass, $db);

	if($message['error'] == 0){
		//Prepare insert customer query
		$query = "INSERT INTO customers (id, user_id, company, address1, address2, city, state, zip, phone) 
					VALUES ('', '$id', '$company', '$address1', '$address2', '$city', '$state', '$zip', '$phone')";

		//Execute query
		if(!$result = $mysqli->query($query)){
			$message['error'] = 1;
			$message['status'] = "Query Error: " . $mysqli->error;
		} else {
			$message['error'] = 0;
			$message['status'] .= "Customer successfully added<br/>";
		}
	}

	return $message;
}

//Reorders a due date and converts it from a string to time
function process_due_date($date_string){
	$date_array = explode('/', $date_string);
	$result = $date_array[2]."-".$date_array[0]."-".$date_array[1]." 00:00:00";
	$result = strtotime($result);
	$result = date("Y-m-d H:i:s", $result);
	return $result;
}

function insert_order($order){

	//Set up our vars for the query
	$user_id		= $order['user_id'];
	$type_id 		= $order['type_id'];
	$due_date 		= $order['due_date'];
	$date_submitted	= date('Y-m-d H:i:s');
	$status_id		=  1;
	$instructions 	= $order['instructions'];

	//Get info to connect to the database
	require('db_info.php');

	//Create db connection
	$mysqli = new mysqli($hname, $uname, $pass, $db);

	//Prepare insert order query
	$query = "INSERT INTO orders (id, type_id, due_date, date_submitted, status_id, instructions) 
				VALUES ('', '$type_id', '$due_date', '$date_submitted', '$status_id', '$instructions')";

	if(!$result = $mysqli->query($query)){
		$message['error'] = 1;
		$message['status'] = "Query Error: " . $mysqli->error ."<br/>";
	} else {
		$order_ids['user_id'] = $user_id;
		$order_ids['order_id'] = $mysqli->insert_id;
		$message['error'] = 0;
		$message['status'] = "Order added successfully! <br/>";

		insert_user_order($order_ids);
	}

	mysqli_close($mysqli);
return $message;

}

function insert_user_order($order_ids){

	//Set up our vars for the query
	$user_id 		= $order_ids['user_id'];
	$order_id 		= $order_ids['order_id'];

	//Get info to connect to the database
	require('db_info.php');

	//Create db connection
	$mysqli = new mysqli($hname, $uname, $pass, $db);

	//Prepare insert order query
	$query = "INSERT INTO user_orders (user_id, order_id) 
				VALUES ('$user_id', '$order_id')";

	//Execute query
	if(!$result = $mysqli->query($query)){
		echo "Query Error: " . $mysqli->error."<br/>";
	} else {
		echo "Order linked to user account<br/>";
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

function get_url() {
		$pageURL = 'http';
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
		 $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
		 $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
	}	

function delete($tablename, $id){
	//Get info to connect to the database
	require('db_info.php');

	//Create db connection
	$mysqli = new mysqli($hname, $uname, $pass, $db);

	//Prepare insert file query
	$query = "DELETE FROM $tablename WHERE id = $id";
	
	if(!$result = $mysqli->query($query)){
		echo "Query Error: " . $mysqli->error;
	} else {
		echo "$id from $tablename was deleted successfully!";
	}
}

///* BEGIN STATIC DATA FUNCTIONS */
//
//function insert_roles(){
//	$roles = array();
//
//	$i=0;
//
//	$roles[$i]['id']	= $i;
//	$roles[$i]['name']	= 'Nothing';
//
//	$i++;
//
//	$roles[$i]['id']	= $i;
//	$roles[$i]['name']	= 'Customer';
//
//	$i++;
//
//	$roles[$i]['id']	= $i;
//	$roles[$i]['name']	= 'Order Manager';
//
//	$i++;
//
//	$roles[$i]['id']	= $i;
//	$roles[$i]['name']	= 'Administrator';
//
//	//Get info to connect to the database
//	require('db_info.php');
//
//	//Create db connection
//	$mysqli = new mysqli($hname, $uname, $pass, $db);
//
//	//Setup loop to insert each type
//	for($j = 0; $j < count($roles); $j++){
//		$id 	= $roles[$j]['id']; 
//		$name 	= $roles[$j]['name'];
//
//		$query = "INSERT INTO roles (id, name)
//				VALUES('$id', '$name')";
//
//		if(!$result = $mysqli->query($query)){
//			echo "Query Error: " . $mysqli->error;
//		} else {
//			echo "Your order was added successfully!";
//		}
//	}
//
//	//Close db connection
//	mysqli_close($mysqli);
//}
//
//function insert_types(){
//
//	//Set up the types array with whatever types we want to offer
//
//	$types = array();
//
//	$i=0;
//
//	$types[$i]['id'] 	= $i;
//	$types[$i]['name']	= 'Color';
//
//	$i++;
//
//	$types[$i]['id'] 	= $i;
//	$types[$i]['name']	= 'Black and White';
//
//	$i++;
//
//	$types[$i]['id'] 	= $i;
//	$types[$i]['name']	= 'Wraps and Vinyl';
//
//	$i++;
//
//	$types[$i]['id']	= $i;
//	$types[$i]['name']	= 'Multi-layered';
//
//	$i++;
//
//	$types[$i]['id'] 	= $i;
//	$types[$i]['name']	= 'ADA Signage';
//
//	$i++;
//
//	$types[$i]['id'] 	= $i;
//	$types[$i]['name']	= 'Web Related';
//
//	//Get info to connect to the database
//	require('db_info.php');
//
//	//Create db connection
//	$mysqli = new mysqli($hname, $uname, $pass, $db);
//
//	//Setup loop to insert each type
//	for($j = 0; $j < count($types); $j++){
//		$id 	= $types[$j]['id']; 
//		$name 	= $types[$j]['name'];
//
//		$query = "INSERT INTO types (id, name)
//				VALUES('', '$name')";
//
//		if(!$result = $mysqli->query($query)){
//			echo "Query Error: " . $mysqli->error;
//		} else {
//			echo "Your order was added successfully!";
//		}
//	}
//
//	//Close db connection
//	mysqli_close($mysqli);
//}
//
//function insert_statuses(){
//	$statuses = array();
//
//	$i=0;
//
//	$statuses[$i]['id']		= $i;
//	$statuses[$i]['name']	= 'Pending';
//
//	$i++;
//
//	$statuses[$i]['id']		= $i;
//	$statuses[$i]['name']	= 'Received';
//
//	$i++;
//
//	$statuses[$i]['id']		= $i;
//	$statuses[$i]['name']	= 'Printing';
//
//	$i++;
//
//	$statuses[$i]['id']		= $i;
//	$statuses[$i]['name']	= 'Packaging';
//
//	$i++;
//
//	$statuses[$i]['id']		= $i;
//	$statuses[$i]['name']	= 'Shipped';
//
//	//Get info to connect to the database
//	require('db_info.php');
//
//	//Create db connection
//	$mysqli = new mysqli($hname, $uname, $pass, $db);
//
//	//Setup loop to insert each type
//	for($j = 0; $j < count($statuses); $j++){
//		$id 	= $statuses[$j]['id']; 
//		$name 	= $statuses[$j]['name'];
//
//		$query = "INSERT INTO statuses (id, name)
//				VALUES('', '$name')";
//
//		if(!$result = $mysqli->query($query)){
//			echo "Query Error: " . $mysqli->error;
//		} else {
//			echo "Your order was added successfully!";
//		}
//	}
//
//	//Close db connection
//	mysqli_close($mysqli);
//}
//
//function insert_static_data(){
//	insert_roles();
//	insert_types();
//	insert_statuses();
//}
//
///* END STATIC DATA FUNCTIONS */

?>