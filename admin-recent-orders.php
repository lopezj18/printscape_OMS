
<?php

session_start();
include("header.php");
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
<tr><th>Order Id</th><th>Customer Name</th><th>Order Name</th><th>Type</th><th>Due Date</th><th>Date Submited</th><th>Status</th><th>Download File</th><th>Details</th><th>Delete</th></tr>

<tr><td>Cell:1</td><td>Cell:2</td><td>Cell:3</td><td>Cell:4</td><td>Cell:5</td><td>Cell:6</td><td>Cell:6</td><td>Cell:7</td><td>Cell:8</td><td>Cell:9</td></tr>

</table>


<?php
include("footer.php");
?>


