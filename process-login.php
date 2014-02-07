<?php
function check_login($username, $password){
		//put code from external file right here before the doctype:
		include("function-lib.php");
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
			header('Location:login.php');
		//otherwise
		}else{
			//send them back and trigger a message
			echo "<h1>Incorrect User Name or Password</h1>";
		}
}
?>
