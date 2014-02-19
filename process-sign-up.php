<?php
//put code from external file right here before the doctype:
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

$customer = array();
$customer['user_id'] = '2';
$customer['company'] = sanitize($_POST['company_name']);
$customer['address1'] = sanitize($_POST['address_1']);
$customer['address2'] = sanitize($_POST['address_2']);
$customer['city'] = sanitize($_POST['city']);
$customer['state'] = sanitize($_POST['state']);
$customer['zip'] = sanitize($_POST['zip']);
$customer['phone_number'] = sanitize($_POST['phone_number']);

$message = insert_customer($customer);
print_r($message);


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