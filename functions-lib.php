<?php //test_functions.php
function check_login($username, $password){
	include('db-connect.php');
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
$result = $mysqli -> query($query) or die ('problem on line 14: '.$mysqli -> error);
//close connection
mysqli_close($mysqli);
//send the retrieved info back ti where the function was called
return $result;

}//closes the funtion on line 4
include('test_functions.php');
function get_users($users, $page_number){

	for($i=0; $i<(20*$page_number); $i++){
		$results = "<tr><td>".$user['user_id']."</td><td>".$user['username']."</tr>";
	}
	return $results;
}

function sanitize($variable){
	if(get_magic_quotes_gpc()) $variable = stripslashes($variable);
	$variable = htmlspecialchars($variable);
	return $variable;
}


?>