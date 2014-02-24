<?php
session_start();
require_once("header.php");
require_once("authenticate.php");
$url = explode('?tabletype=', get_url());
$tabletype = $url[1];
?>


<form class="formtable" action="process-delete-clients.php" method="POST" enctype="multipart/form-data">
<h1 class="h1_titles">All Clients</h1>
<?php
	$customers = retrieve_customers();
	echo build_customers_table($customers, $tabletype);
?>
</form>


<?php
include("footer.php");
?>


