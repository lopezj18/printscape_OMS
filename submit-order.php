<?php
<<<<<<< HEAD
require_once("authenticate");
=======
require_once("authenticate.php");
require_once("functions-lib.php");
>>>>>>> da3156d2854b3df32944df226e48d2beec34c3b1
require_once("header.php");
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
<form class="submit_order" action="process-submit-order.php" method="POST" enctype="multipart/form-data">
	 <div>
     <h1>Submit An Order</h1>
    <p><input type="text" placeholder="Customer Name" name="customer_name"></p>
    <p><input type="text" placeholder="Order Name" name="order_name"></p>
    <p><input type="text" placeholder="Type of Order" name="type"></p>
    <p><input type="date" placeholder="Due Date" name="due_date"></p>
    <p><input type="date" placeholder="Todays Date" name="date_submited"></p>
    <p><input type="file" placeholder="Upload File" name="file"></p>
    <p><textarea rows="8" cols="33"  maxlength="150" type="text" placeholder="Special Instructions (Please Limit Your Instructions)" name="special_instructions"></textarea></p>
	<p><input type="submit" class="btn"></p>
    </div>
</form>

<?php
include("footer.php");
?>