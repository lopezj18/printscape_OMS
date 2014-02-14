<?php require_once('functions-lib.php'); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- May not want to set NO-CACHE here -->
	<!-- <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE"> -->
	<title>Printscape</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/clearfix.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/tables.css">
	<link rel="stylesheet" type="text/css" href="css/forms.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
</head>
<body>
	<header>
		<div class="headerdiv_container">
			<a href="index.php"><div><img src="images/logo.png"><p>Ordering Management System</p></div></a>
		</div>
	</header>

<?php
if(check_customer_role($_SESSION['role_id'])){
	include('customer-nav.php');
}

if(check_manager_role($_SESSION['role_id'])){
	include('customer-nav.php');
	include('nav.php');
}

if(check_administrator_role($_SESSION['role_id'])){
	include('customer-nav.php');
	include('nav.php');
}

print_r($_SESSION);
?>

	<div class="wrapper">