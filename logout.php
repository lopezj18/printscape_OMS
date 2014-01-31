<?php 
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header('Location:login.php');
die;
?>