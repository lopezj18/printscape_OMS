<?php
//put code from external file right here before the doctype:
require_once("authenticate.php");
require_once("functions-lib.php");

//store in a var of the user's choice 
$customer_name = sanitize($_POST['customer_name']);
$order_name = sanitize($_POST['order_name']);
$type = sanitize($_POST['type']);
$due_date = sanitize($_POST['due_date']);
$date_submited = sanitize($_POST['date_submited']);
$date_submited = sanitize($_POST['file']);
$special_instructions = sanitize($_POST['special_instructions']);

//////////////////////start finding the new id////////////////
//make a var to store the new id # the new record will get
$new_id = 0;
//run a query to get the highest id # number curently used
$result = run_my_query('SELECT * FROM jobs ORDER BY due_date DESC');
while($row = $result -> fetch_assoc()){
	$new_id = $row['id'];
}////closes while loop
/////add one to the highest id to get the new id
$new_id++;
/////////////////////end finding new id/////////////////////////////////
//print_r($_FILES);

run_my_query("
INSERT INTO jobs
    (id, company_name, order_name, type, due_date, date_submited, file, specia1_instructions)
	VALUES 
	(null, '$customer_name', '$order_name', '$type', '$due_date', '$date_submited' '$file', '$specia1_instructions');
");


header('Location:my-recent-orders.php');
?>