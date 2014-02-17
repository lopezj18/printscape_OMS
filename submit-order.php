<?php
session_start();
require_once("authenticate.php");
require_once("header.php");
?>

<?php //require_once('customer-nav.php'); ?>

<form class="submit_order" action="process-submit-order.php" method="POST" enctype="multipart/form-data">
	 <div>
     <h1>Submit An Order</h1>
    <p><select name="type" required>
    <option value="">Pick an Order Type</option>
			<?php $types = retirve_order_types();
						echo build_type_options($types);?>
       
            
    </select></p>
    <p><input type="date" placeholder="Due Date mm/dd/yyyy" name="due_date"></p>
    <!--<p><input type="date" placeholder="Todays Date mm/dd/yyyy" name="date_submited"></p>-->
    <p><input type="file" placeholder="Upload File" name="file"></p>
    <p><textarea rows="8" cols="33"  maxlength="150" type="text" placeholder="Special Instructions (Please Limit Your Instructions)" name="special_instructions"></textarea></p>
	<p><input type="submit" class="btn" value="Submit"></p>
    </div>
</form>

<?php
include("footer.php");
?> 