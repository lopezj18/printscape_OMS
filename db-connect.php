<?php
require_once('db_info.php');
connect($hname, $uname, $pass, $db);

function connect($hname, $uname, $pass, $db){
	//connect to the server and database.the myswli( ) function needs 4 parameters. mysqli(servername, username, password, db name)
$mysqli = new mysqli($hname, $uname, $pass, $db);
//for troubleshooting, this willmake a custom message apear if line 3 had a problem
if($mysqli -> connect_errno){
	echo "connection problem on line 9:".$mysqli ->
connect_error;
}	
}