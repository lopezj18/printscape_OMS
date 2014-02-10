<?php
	
	require_once('tests/test_functions.php');
	require_once('functions-lib.php');
	//$test_users = test_users();
	//$test_customers = test_customers();
	$test_orders = test_orders();

	//foreach($test_users as $t_user) insert_user($t_user);
	//foreach($test_customers as $t_customer) insert_customer($t_customer);


	foreach($test_orders as $t_order) insert_order($t_order);
	foreach($test_orders as $t_order) insert_order($t_order);
	foreach($test_orders as $t_order) insert_order($t_order);
	foreach($test_orders as $t_order) insert_order($t_order);
	foreach($test_orders as $t_order) insert_order($t_order);
	foreach($test_orders as $t_order) insert_order($t_order);
	foreach($test_orders as $t_order) insert_order($t_order);

	//insert_roles();
	//insert_static_data();

?>