<?php
require_once("functions-lib.php");

print_r($_POST);
////call the run_my_query()function from that include
//$delete_id=$_POST['delete_id'];

		
	foreach($_POST['deletecheckbox'] as $checkbox){
		$checkbox = sanitize($checkbox);
		delete('orders', $checkbox);
	}
			
////redirect them to view home page
header('Location:admin-recent-orders.php?tabletype=delete');
?>
