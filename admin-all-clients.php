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
<?php //require_once('nav.php'); ?>

<h1 class="h1_titles">All Clients</h1>
<table class="tftable" border="1">
<tr><th>User Id</th><th>Company</th><th>Address 1</th><th>Address 2</th><th>City</th><th>State</th><th>Zip</th><th>Phone Number</th><th>Date Created</th></tr>

<?php
	$customers = retrieve_customers();
	echo build_customers_table($customers);
?>


<!--<tr><td>Cell:1</td><td>Cell:2</td><td>Cell:3</td><td>Cell:4</td><td>Cell:5</td><td>View</td></tr>-->

</table>


<?php
require_once("footer.php");
?>


