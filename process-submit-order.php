<?php
//put code from external file right here before the doctype:
session_start();
require_once("authenticate.php");
require_once("functions-lib.php");

//store in a var of the user's choice 



$order = array();
	$order = sanitize($_POST['customer_name']);
	$order = sanitize($_POST['order_name']);
	$order = sanitize($_POST[1]);
	$order = sanitize($_POST['due_date']);
	$order = sanitize($_POST['date_submitted']);
	$order = sanitize($_POST['file']);
	$order = sanitize($_POST['special_instructions']);



insert_order($order);


header('Location:my-recent-orders.php');
?>