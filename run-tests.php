<?php
	
	require_once('tests/test_functions.php');
	require_once('functions-lib.php');
	
	//STATIC DATA FUNCTIONS
	//insert_roles();
	//insert_static_data();

	echo date('m-d-Y H-i-s');

	if($_POST['create']){
		switch($_POST['create']){
			case 1:
				$admins = create_admins();
				foreach ($admins as $t){ print_r(insert_user($t)); sleep(1);}
				break;
			case 2:
				$customers = create_customers();
				foreach($customers as $t){ print_r(insert_customer($t)); sleep(1);}
				break;
			case 3:
				$orders = create_orders();
				foreach($orders as $t){ print_r(insert_order($t)); sleep(1);}
				break;
			case 4:
				$user_orders = create_user_orders();
				foreach($user_orders as $t){ print_r(insert_user_order($t)); sleep(1);}
				break;
		}	
	}

	if($_POST['truncate']){
		switch($_POST['truncate']){
			case 1:
				print_r(truncate_table('users'));
				break;
			case 2:
				print_r(truncate_table('customers'));
				break;
			case 3:
				print_r(truncate_table('orders'));
				break;
			case 4:
				print_r(truncate_table('user_orders'));
				break;
		}	
	}

	function truncate_table($table){
		//Get info to connect to the database
		require('db_info.php');

		//Create db connection
		$mysqli = new mysqli($hname, $uname, $pass, $db);

		//Prepare insert user query
		$query = "SET FOREIGN_KEY_CHECKS=0; ";
		$query .= "TRUNCATE TABLE `$table`; ";
		$query .= "SET FOREIGN_KEY_CHECKS=1; ";
		//Execute query
		if(!$result = $mysqli->multi_query($query)){
			$message['error'] = 1;
			$message['status'] = "Query Error: " . $mysqli->error ."<br/>";
		} else {
			$message['error'] = 0;
			$message['status'] = "Table: $table truncated successfully<br/>";
		}
		mysqli_close($mysqli);
		return $message;
	}

?>

<html>
<body>
	<form action="run-tests.php" method="POST">
		<button type="submit" name="create" value="1">Create Admins</button>
		<button type="submit" name="create" value="2">Create Customers</button>
		<button type="submit" name="create" value="3">Create Orders</button>
		<button type="submit" name="create" value="4">Create User Orders</button>
	</form>
	<form action="run-tests.php" method="POST">
		<button type="submit" name="truncate" value="1">Truncate Users</button>
		<button type="submit" name="truncate" value="2">Truncate Customers</button>
		<button type="submit" name="truncate" value="3">Truncate Orders</button>
		<button type="submit" name="truncate" value="4">Truncate User Orders</button>
	</form>
</body>
</html>