<?php

// A list of permitted file extensions
$allowed = array('png', 'jpg', 'gif','zip', 'pdf');

if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){

	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}

	if($is_customer) $upload_loc = $customer_info['company']."/".date('m-d-Y');
	$firephp->log($upload_loc);
	$firephp->log($_SESSION);

	if(move_uploaded_file($_FILES['upl']['tmp_name'], 'test_uploads/'.$_FILES['upl']['name'])){
		echo '{"status":"success"}';
		exit;
	}
}

echo '{"status":"error"}';
exit;