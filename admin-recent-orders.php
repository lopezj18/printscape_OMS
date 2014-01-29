
<?php

session_start();
include("header.php");
include("functions-lib.php");
?>

<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #a9a9a9;border-collapse: collapse; margin-top:20px;}
.tftable th {font-size:12px;background-color:#c1d72e;border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;text-align:left; font-weight:bold;}
.tftable tr {background-color:#ffffff;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;}
.tftable tr:hover {background-color:#f3fcb9;}
</style>

<h1 class="h1_titles">Recent Orders</h1>
<table class="tftable" border="1">
<tr><th>Id#</th><th>Customer Name</th><th>Order Name</th><th>Type</th><th>Due Date</th><th>Date Submited</th><th>Status</th><th>File</th><th>Special Instructions</th><th>Delete</th></tr>

<?php
	$jobs = test2();
	echo get_order($jobs);
?>

</table>


<?php
include("footer.php");
?>


