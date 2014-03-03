<?php
session_start();
require_once("authenticate.php");
require_once("functions-lib.php");
require_once("header.php");
$url = explode('?tabletype=', get_url());
$tabletype = $url[1];
?>

<style type="text/css">
h2{padding:10px 10px 0 0; font-size:18px; width:100%; text-align:right;}
a:link{color:#9fa615;}
a:visited{color:#9fa615;}
a:hover{color:white;}
a:active{color:white;}
</style>


<form class="formtable" action="process-delete-orders.php" method="POST" enctype="multipart/form-data">
<h1 class="h1_titles">My Recent Orders</h1>
<?php
	$sort = 'date_submitted';
	$orders = retrieve_orders($sort);
	echo build_orders_table($orders, $tabletype);
?>
</form>

<?php
include("footer.php");
?>


