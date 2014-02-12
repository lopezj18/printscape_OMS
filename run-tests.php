<?php
	
	require_once('tests/test_functions.php');
	require_once('functions-lib.php');
	$admins = create_admins();
	//$customers = create_customers();
	//$orders = create_orders();
	//$user_orders = create_user_orders();
	
	foreach($admins as $t) insert_user($t);
	//foreach($customers as $t) insert_user($t); insert_customer($t);
	//foreach($orders as $t) insert_order($t);
	//foreach($user_orders as $t) insert_user_order($t);

	//insert_roles();
	//insert_static_data();

?>