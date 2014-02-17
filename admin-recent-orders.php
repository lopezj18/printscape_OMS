<?php
session_start();
require_once("authenticate.php");
require_once("functions-lib.php");
require_once("header.php");
?>

<style type="text/css">
	h2{padding:10px 10px 0 0; font-size:18px; width:100%; text-align:right;}
	a:link{color:#9fa615;}
	a:visited{color:#9fa615;}
	a:hover{color:white;}
	a:active{color:white;}
</style>
<?php //require_once('nav.php'); ?>

<h1 class="h1_titles">Recent Orders</h1>
<table class="tftable" border="1">
<tr><th>Order #</th><th>Customer Name</th><th>Company</th><th>Type</th><th>Due Date</th><th>Date Submitted</th><th>Status</th><th>File</th><th>Special Instructions</th><th>Delete</th></tr>

<?php
	$sort = "date_submitted";
	$orders = retrieve_orders($sort);
	echo build_orders_table($orders);
?>

</table>


<?php
require_once("footer.php");
?>


