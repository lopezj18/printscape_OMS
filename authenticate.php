<?php
//Probably caused by back button... Check if logged-in...
if(!$_SESSION["username"])
{
    //Do not show protected data, redirect to login...
    header('Location:login.php');
}
//Show protected data...

?>