<?php
require_once("functions-lib.php");


////call the run_my_query()function from that include
//$delete_id=$_POST['delete_id'];
//$userstodelete = array();
//$userstodelete['id'] = sanitize($_POST['deletecheckbox']);
	
	foreach($_POST['deletecheckbox'] as $checkbox){
		$checkbox = sanitize($checkbox);
		delete('users', $checkbox);
	}

			
////redirect them to view home page
header('Location:admin-all-users.php?tabletype=delete');
?>
