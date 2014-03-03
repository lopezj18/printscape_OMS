<?php
require_once("functions-lib.php");

//$userstodelete = array();
		
	foreach($_POST['deletecheckbox'] as $checkbox){
		$checkbox = sanitize($checkbox);
		delete('customers', $checkbox);
	}
	
			
////redirect them to view delete page
header('Location:admin-all-clients.php?tabletype=delete');
?>
