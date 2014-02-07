<?php
session_start();
require_once("header.php");
require_once("authenticate.php");
?>

<style type="text/css">
h2{padding:10px 10px 0 0; font-size:18px; width:100%; text-align:right;}
a:link{color:#9fa615;}
a:visited{color:#9fa615;}
a:hover{color:white;}
a:active{color:white;}
</style>
<h2><a href="submit-order.php">Submit An Order</a></h2>
<h2><a href="my-recent-orders.php">My Recent Orders</a></h2>
<h2><a href="logout.php">Log Out</a></h2>
<h1 class="h1_titles">My Recent Orders</h1>
<table class="tftable" border="1">
<tr><th>Id#</th><th>Customer Name</th><th>Order Name</th><th>Type</th><th>Due Date</th><th>Date Submited</th><th>Status</th><th>File</th><th>Special Instructions</th><th>Delete</th></tr>

<?php
	$jobs = jobs();
	echo get_order($jobs);
?>

</table>


<?php
include("footer.php");
?>


