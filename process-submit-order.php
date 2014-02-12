<?php
//put code from external file right here before the doctype:
session_start();
require_once("authenticate.php");
require_once("functions-lib.php");

//store in a var of the user's choice 




$order = array();
$order['type_id'] = sanitize($_POST['type']);
$order['last_name'] = sanitize($_POST['due_date']);
$order['date_submitted'] = date ("m-d-Y H:i:s");
$order['instructions'] = sanitize($_POST['special_instructions']);

$message = insert_order($order);
print_r($message);

//header('Location:my-recent-orders.php');
 





?>