<?php
session_start();
require_once("authenticate.php");
require_once("header.php");
if($is_customer) $customer_info = retrieve_customer_info();
?>

<?php //require_once('customer-nav.php'); ?>

<form id="upload" class="submit_order" action="process-submit-order.php" method="POST" enctype="multipart/form-data">
	<div>
        <h1>Submit An Order</h1>
        
        <p><select name="type" required>
            <option value="">Pick an Order Type</option>
    			<?php 
                    $types = retrieve_order_types();
    				echo build_type_options($types);
                ?>
        </select></p>
        
        <p><input type="date" placeholder="Due Date mm/dd/yyyy" name="due_date"></p>
        
        <div id="drop">
            <p>Drop Here</p>
            <a>Browse</a>
            <input type="file" name="upl" multiple />
        </div>

        <ul>
            <!-- The file uploads will be shown here -->
        </ul>

        <p><textarea rows="8" cols="33"  maxlength="150" type="text" placeholder="Special Instructions (Please Limit Your Instructions to 150 characters)" name="special_instructions"></textarea></p>
    	<p><input type="submit" class="btn" value="Submit"></p>

    </div>
</form>
<?php
include("footer.php");
?>
    <!-- JavaScript Includes -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/uploader/jquery.knob.js"></script>

    <!-- jQuery File Upload Dependencies -->
    <script src="js/uploader/jquery.ui.widget.js"></script>
    <script src="js/uploader/jquery.iframe-transport.js"></script>
    <script src="js/uploader/jquery.fileupload.js"></script>
    
    <!-- Our main JS file -->
    <script src="js/uploader/script.js"></script>



