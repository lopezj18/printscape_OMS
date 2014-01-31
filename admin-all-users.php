<?php
session_start();
require_once("header.php");
require_once("functions-lib.php");
require_once("authenticate.php");
?>

<style type="text/css">
h2{padding:10px 10px 0 0; font-size:18px; width:100%; text-align:right;}
a:link{color:#9fa615;}
a:visited{color:#9fa615;}
a:hover{color:white;}
a:active{color:white;}
</style>
<h2><a href="admin-all-clients.php">View All Clients</a></h2>
<h2><a href="admin-all-users.php">View All Users</a></h2>
<h2><a href="admin-recent-orders.php">View Recent Orders</a></h2>
<h2><a href="logout.php">Log Out</a></h2>
<h1 class="h1_titles">All Users</h1>
<table class="tftable" border="1">
<tr><th>User Id</th><th>Username</th><th>First Name</th><th>Last Name</th><th>Email Address</th><th>Date Created</th></tr>

<?php
	$users = users();
	echo get_userinfo($users);
?>


<!--<tr><td>Cell:1</td><td>Cell:2</td><td>Cell:3</td><td>Cell:4</td><td>Cell:5</td><td>View</td></tr>-->

</table>


<?php
include("footer.php");
?>


