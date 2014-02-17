<?php
//put code from external file right here before the doctype:
session_start();
require_once("authenticate.php");
require_once("functions-lib.php");

//store in a var of the user's choice 
$order = array();
$order['user_id'] = $_SESSION['user_id'];
$order['type_id'] = sanitize($_POST['type']);
$order['last_name'] = sanitize($_POST['last_name']);
//Need to reformat the date from a more user-friendly format to a more database friendly format
$due_date = process_due_date(sanitize($_POST['due_date']));
$order['due_date'] = $due_date;
//Don't need to assign date_submitted here because it will be assigned when the order is inserted
//$order['date_submitted'] = date("m-d-Y H:i:s");
$order['instructions'] = sanitize($_POST['special_instructions']);

$message = insert_order($order);
print_r($message);

//header('Location:my-recent-orders.php');
 


?>