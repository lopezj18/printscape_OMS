<?php //test_functions.php

function get_users($users, $page_number){

	for($i=0; $i<(20*$page_number); $i++){
		$results = "<tr><td>".$user['user_id']."</td><td>".$user['username']."</tr>";
	}
	return $results;
}
?>