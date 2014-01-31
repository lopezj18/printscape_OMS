<?php 
function users(){
	$users = array();
	$users[0]['user_id'] = 0;
	$users[0]['username'] = 'jsmith';
	$users[0]['first_name'] = 'John';
	$users[0]['last_name'] = 'Smith';
	$users[0]['email'] = 'jsmith@testcompany.com';
	$users[0]['date_created'] = new DateTime("2014-01-05 11:14:15");
	
	$users[1]['user_id'] = 1;
	$users[1]['username'] = 'jackie2334';
	$users[1]['first_name'] = 'Jackie';
	$users[1]['last_name'] = 'Mouse';
	$users[1]['email'] = 'jsmith@testcompany.com';
	$users[1]['date_created'] = new DateTime("2013-11-02 11:14:15");
	
	$users[2]['user_id'] = 0;
	$users[2]['username'] = 'Dannyg11';
	$users[2]['first_name'] = 'Dan';
	$users[2]['last_name'] = 'Brown';
	$users[2]['email'] = 'dbrown@testcompany.com';
	$users[2]['date_created'] = new DateTime("2011-01-03 11:14:15");
	
	$users[3]['user_id'] = 0;
	$users[3]['username'] = 'jaceee123';
	$users[3]['first_name'] = 'Jason';
	$users[3]['last_name'] = 'Rake';
	$users[3]['email'] = 'jrake@testcompany.com';
	$users[3]['date_created'] = new DateTime("2013-01-06 11:14:15");
return $users;
}

function customers(){
	$customers = array();
	$customers[0]['user_id'] = 0;
	$customers[0]['company_name'] = 'Cool Company';
	$customers[0]['email'] = 'jsmith@testcompany.com';
	$customers[0]['address_1'] = '2255 Example rd';
	$customers[0]['address_2'] = 'Building 3';
	$customers[0]['city'] = 'Smithonia';
	$customers[0]['state'] = 'PA';
	$customers[0]['zip'] = '15071';
	$customers[0]['phone_number'] = '440-132-1254';
	$customers[0]['date_created'] = new DateTime("2014-01-02 11:14:15");
	
	$customers[1]['user_id'] = 1;
	$customers[1]['company_name'] = 'Dumb Company';
	$customers[1]['email'] = 'papagorgeio@testcompany.com';
	$customers[1]['address_1'] = '5117 Example Lane';
	$customers[1]['address_2'] = 'Suite 5';
	$customers[1]['city'] = 'Smith';
	$customers[1]['state'] = 'PA';
	$customers[1]['zip'] = '15841';
	$customers[1]['phone_number'] = '441-132-1254';
	$customers[1]['date_created'] = new DateTime("2014-01-02 11:14:15");
return $customers;
}

function jobs(){
	$jobs = array();
	$jobs[0]['job_id'] = 1;
	$jobs[0]['customer_name'] = 'joe joehanson';
	$jobs[0]['order_name'] = 'meow';
	$jobs[0]['type'] = 'carwrap';
	$jobs[0]['due_date'] = new DateTime("2014-01-06 11:14:15");
	$jobs[0]['date_submited'] = new DateTime("2014-01-02 11:14:15");
	$jobs[0]['status'] = 'pending';
	$jobs[0]['file'] = 'orders/printfiles/car.pdf';
	$jobs[0]['instructions'] = 'blahhh blah';
	$jobs[0]['delete'] = 'delete';
	
	$jobs[1]['job_id'] = 1;
	$jobs[1]['customer_name'] = 'joe joehanson';
	$jobs[1]['order_name'] = 'meow';
	$jobs[1]['type'] = 'carwrap';
	$jobs[1]['due_date'] = new DateTime("2014-01-06 11:14:15");
	$jobs[1]['date_submited'] = new DateTime("2014-01-02 11:14:15");
	$jobs[1]['status'] = 'pending';
	$jobs[1]['file'] = 'orders/printfiles/car.pdf';
	$jobs[1]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vestibulum augue a neque pulvinar auctor. Quisque ac augue metus. Nulla luctus ante nec';
	$jobs[1]['delete'] = 'delete';
	
	$jobs[2]['job_id'] = 1;
	$jobs[2]['customer_name'] = 'joe joehanson';
	$jobs[2]['order_name'] = 'meow';
	$jobs[2]['type'] = 'carwrap';
	$jobs[2]['due_date'] = new DateTime("2014-01-06 11:14:15");
	$jobs[2]['date_submited'] = new DateTime("2014-01-02 11:14:15");
	$jobs[2]['status'] = 'pending';
	$jobs[2]['file'] = 'orders/printfiles/car.pdf';
	$jobs[2]['instructions'] = ' blah';
	$jobs[2]['delete'] = 'delete';
return $jobs;
}

?>