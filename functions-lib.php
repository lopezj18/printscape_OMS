<?php //test_functions.php
function check_login($username, $password){
		//call the run_my_query()function from that include
		$result = run_my_query("SELECT * FROM users 
			WHERE username='$username'
			AND password='$password'
			");
		
		//if it selected a row they typed the correct username and password
		//if ($theirname =='boss')&&($theirpass=='boss')){
		
		//get the pointer to point at the first row retried by the select
		$result -> data_seek(0);
		if($row = $result -> fetch_assoc()){
		
			//do goo thing :remember that they're logged in 
			//echo "Correct!";
			
			//start a session to enable us to store session vars, which other pages cannot read
			session_start();
			//store the user's name in a session var
			$_SESSION['username'] = $row['username'];
			$_SESSION['logged_in'] = true;
			//redirect them to view home page
			header('Location:admin-recent-orders.php');
		//otherwise
		}else{
			//send them back and trigger a message
			
			echo "invalid user";
		}
}
function run_my_query($query){
//run a query to retrive all row (record) data from our table SELECT *. We'll store that in a var (array)
require_once('db_info.php');

//figure this shit out...
$mysqli = new mysqli($hname, $uname, $pass, $db);
//for troubleshooting, this willmake a custom message apear if line 3 had a problem
if($mysqli -> connect_errno){
	echo "connection problem on line 9:".$mysqli ->
connect_error;
}	



$result = $mysqli -> query($query) or die ('problem on line 14: '.$mysqli -> error);
//close connection
mysqli_close($mysqli);
//send the retrieved info back ti where the function was called
return $result;

}//closes the funtion on line 4
include('test_functions.php');


function get_clients($customers){

	for($i=0; $i<(1); $i++){
		$results .="<tr><td>".$customers[$i]['user_id']."</td>";
		$results .="<td>".$customers[$i]['company_name']."</td>";
		$results .="<td>".$customers[$i]['address_1']."</td>";
		$results .="<td>".$customers[$i]['address_2']."</td>";
		$results .="<td>".$customers[$i]['city']->format('m-d-Y')."</td>";
		$results .="<td>".$customers[$i]['state']->format('m-d-Y')."</td>";
		$results .="<td>".$customers[$i]['zip']."</td>";
		$results .="<td>".$customers[$i]['phone_number']."</td></tr>";
	}
	return $results;
}


function get_order($jobs){
	for($i=0; $i<(3); $i++){
		
		$results .="<tr><td>".$jobs[$i]['job_id']."</td>";
		$results .="<td>".$jobs[$i]['customer_name']."</td>";
		$results .="<td>".$jobs[$i]['order_name']."</td>";
		$results .="<td>".$jobs[$i]['type']."</td>";
		$results .="<td>".$jobs[$i]['due_date']->format('m-d-Y')."</td>";
		$results .="<td>".$jobs[$i]['date_submited']->format('m-d-Y')."</td>";
		$results .="<td>".$jobs[$i]['status']."</td>";
		$results .="<td>".$jobs[$i]['file']."</td>";
		$results .="<td>".$jobs[$i]['instructions']."</td>";
		$results .="<td>".$jobs[$i]['delete']."</td></tr>";
		
	}
	return $results;
}


function sanitize($variable){
	if(get_magic_quotes_gpc()) $variable = stripslashes($variable);
	$variable = htmlspecialchars($variable);
	return $variable;
}


?>