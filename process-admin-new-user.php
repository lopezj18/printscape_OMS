<?php
//put code from external file right here before the doctype:
require_once("authenticate.php");
require_once("functions-lib.php");
require_once("db-connect.php");
//store in a var of the user's choice 
$user = array();
$user['username'] = sanitize($_POST['username']);
$user['password'] = sanitize($_POST['password']);
$user['first_name'] = sanitize($_POST['first_name']);
$user['last_name'] = sanitize($_POST['last_name']);
$user['email'] = sanitize($_POST['email']);
$user['date_created'] = date ("m-d-Y H:i:s");
$user['role_id'] = sanitize($_POST['role_id']);


$message = insert_user($user);
print_r($message);


//$message = insert_customer($roles);
//print_r($message);


//$submit = filter_input(INPUT_POST, 'submit');


// if ($submit)
//    {
//    //check for existence
//       if($username&&$password&&$repeatpassword)
//       {
//       $password_md5 = md5($password);
//       $repeatpassword_md5 = md5($repeatpassword);
//
//    if ($password==$repeatpassword)
//    {
//    //check char length of username and fullname
//        if (strlen($username)>25 || strlen($username)<6)
//        {
//        echo "Username must be between 6 and 25 characters";
//        }
//        else
//        {
//        //check password length 
//            if (strlen ($password)>25 || strlen ($password)<6)
//            {
//            echo "Password must be between 6 and 25 characters";
//            }
//            else
//            {
//            //register user 
//            }
//        }
//    }
//    else echo "<h1>Your passwords do not match</h1>";
//
//}
//else echo "<h1>Please fill in <b>all</b> fields!</h1>";
//    }
   






//header('Location:my-recent-orders.php');
?>