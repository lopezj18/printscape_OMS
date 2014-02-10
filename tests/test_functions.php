<?php //test_functions.php

function test_users(){
	$test_users =  array();

	$i=0;

	$test_users[$i]['id'] = $i;
	$test_users[$i]['username'] = 'jsmith';
	$test_users[$i]['password'] = '123';
	$test_users[$i]['first_name'] = 'John';
	$test_users[$i]['last_name'] = 'Smith';
	$test_users[$i]['email'] = 'jsmith@testuser.com';
	$test_users[$i]['role_id'] = 1;
	$test_users[$i]['date_created'] = date("2014-01-02 11:14:15");

	$i++;

	$test_users[$i]['id'] = $i;
	$test_users[$i]['username'] = 'alincoln';
	$test_users[$i]['password'] = '123';
	$test_users[$i]['first_name'] = 'Abe';
	$test_users[$i]['last_name'] = 'Lincoln';
	$test_users[$i]['email'] = 'abe@testuser.com';
	$test_users[$i]['role_id'] = 1;
	$test_users[$i]['date_created'] = date("1950-10-23 1:23:07");

	$i++;

	$test_users[$i]['id'] = $i;
	$test_users[$i]['username'] = 'jj';
	$test_users[$i]['password'] = '123';
	$test_users[$i]['first_name'] = 'Jimmy';
	$test_users[$i]['last_name'] = 'Johns';
	$test_users[$i]['email'] = 'jj@testuser.com';
	$test_users[$i]['role_id'] = 1;
	$test_users[$i]['date_created'] = date("2050-11-13 10:47:05");

	$i++;

	$test_users[$i]['id'] = $i;
	$test_users[$i]['username'] = 'dingus';
	$test_users[$i]['password'] = '123';
	$test_users[$i]['first_name'] = 'Steve';
	$test_users[$i]['last_name'] = 'Brule';
	$test_users[$i]['email'] = 'ya_dingus@testuser.com';
	$test_users[$i]['role_id'] = 1;
	$test_users[$i]['date_created'] = date("2014-01-02 11:14:15");

	$i++;

	$test_users[$i]['id'] = $i;
	$test_users[$i]['username'] = 'jif';
	$test_users[$i]['password'] = '123';
	$test_users[$i]['first_name'] = 'peanut';
	$test_users[$i]['last_name'] = 'butter';
	$test_users[$i]['email'] = 'mmmmm@testuser.com';
	$test_users[$i]['role_id'] = 1;
	$test_users[$i]['date_created'] = date("2006-06-07 2:30:00");

	return $test_users;
}

function test_roles(){
	$roles = array();
	
	$roles[0]['id'] = 0;
	$roles[0]['name'] = 'Nothing';

	$roles[1]['id'] = 1;
	$roles[1]['name'] = 'Customer';

	$roles[2]['id'] = 2;
	$roles[2]['name'] = 'Order Manager';

	$roles[3]['id'] = 3;
	$roles[3]['name'] = 'Administrator';

	return $roles;
}

function test_customers(){
	$customers = array();

	$i=0;

	$customers[$i]['id'] = $i;
	$customers[$i]['user_id'] = 3;
	$customers[$i]['company'] = 'Jimmy Johns';
	$customers[$i]['address'] = '123 Somewhere Dr';
	$customers[$i]['city'] = 'Carnegie';
	$customers[$i]['state'] = 'PA';
	$customers[$i]['zip'] = '15106';
	$customers[$i]['phone'] = '1234567890';

	$i++;

	$customers[$i]['id'] = $i;
	$customers[$i]['user_id'] = 3;
	$customers[$i]['company'] = 'Jimmy Johns';
	$customers[$i]['address'] = '123 Somewhere Else Dr';
	$customers[$i]['city'] = 'Robinson Twp';
	$customers[$i]['state'] = 'PA';
	$customers[$i]['zip'] = '15205';
	$customers[$i]['phone'] = '0987654321';

	$i++;

	$customers[$i]['id'] = $i;
	$customers[$i]['user_id'] = 10;
	$customers[$i]['company'] = 'Vampire Huntering Inc';
	$customers[$i]['address'] = 'Corner of 4 Scores and 7 Yearsagro';
	$customers[$i]['city'] = 'Gettysburg';
	$customers[$i]['state'] = 'PA';
	$customers[$i]['zip'] = '17325';
	$customers[$i]['phone'] = '000000000';

	$i++;

	$customers[$i]['id'] = $i;
	$customers[$i]['user_id'] = 12;
	$customers[$i]['company'] = 'Check it out!';
	$customers[$i]['address'] = 'Right behind ya, ya dingus';
	$customers[$i]['city'] = 'Pretzaville USA';
	$customers[$i]['state'] = 'CA';
	$customers[$i]['zip'] = '58392';
	$customers[$i]['phone'] = '555867954';

	$i++;

	$customers[$i]['id'] = $i;
	$customers[$i]['user_id'] = 13;
	$customers[$i]['company'] = 'J.M. Smucker Company';
	$customers[$i]['address'] = 'The J.M. Smucker Company';
	$customers[$i]['city'] = 'Orrville';
	$customers[$i]['state'] = 'OH';
	$customers[$i]['zip'] = '44667';
	$customers[$i]['phone'] = '18002838915';

	return $customers;
}

function test_status(){
	$status = array();

	$status[0]['id'] = 0;
	$status[0]['name'] = 'Pending';

	$status[0]['id'] = 1;
	$status[0]['name'] = 'Received';

	$status[0]['id'] = 2;
	$status[0]['name'] = 'Printing';

	$status[0]['id'] = 3;
	$status[0]['name'] = 'Packaging';

	$status[0]['id'] = 4;
	$status[0]['name'] = 'Shipped';

	return $status;
}

function test_orders(){

	$orders = array();

	$i = 0;

	$orders[$i]['id'] = $i;
	$orders[$i]['type_id'] = 1;
	$orders[$i]['due_date'] = date("2015-02-05 10:10:10");
	$orders[$i]['date_submitted'] = date("2014-01-02 11:14:15");
	$orders[$i]['status_id'] = 1;
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nibh purus, vulputate nec rhoncus mattis, consequat non eros. In non purus justo. Praesent accumsan, massa in volutpat congue, erat quam laoreet elit, ac tincidunt erat mauris non est. Aliquam tincidunt adipiscing erat sed commodo. Curabitur suscipit eros eros, ac feugiat erat pulvinar sit amet. Etiam id quam sagittis, vehicula nisi non, blandit urna. Nunc pulvinar urna a tincidunt dictum. Curabitur id sodales tortor. Aenean euismod diam ac leo aliquam, ac accumsan eros euismod. Nulla nisl ligula, laoreet sed egestas at, facilisis vel tortor.';

	$i++;

	$orders[$i]['id'] = $i;
	$orders[$i]['type_id'] = 3;
	$orders[$i]['due_date'] = date("2014-01-03 10:00:00");
	$orders[$i]['date_submitted'] = date("2014-01-01 08:00:00");
	$orders[$i]['status_id'] = 1;
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nibh purus, vulputate nec rhoncus mattis, consequat non eros. In non purus justo. Praesent accumsan, massa in volutpat congue, erat quam laoreet elit, ac tincidunt erat mauris non est. Aliquam tincidunt adipiscing erat sed commodo. Curabitur suscipit eros eros, ac feugiat erat pulvinar sit amet. Etiam id quam sagittis, vehicula nisi non, blandit urna. Nunc pulvinar urna a tincidunt dictum. Curabitur id sodales tortor. Aenean euismod diam ac leo aliquam, ac accumsan eros euismod.';

	$i++;

	$orders[$i]['id'] = $i;
	$orders[$i]['type_id'] = 2;
	$orders[$i]['due_date'] = date("2014-01-09 17:00:00");
	$orders[$i]['date_submitted'] = date("2014-01-05 03:57:23");
	$orders[$i]['status_id'] = 1;
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nibh purus, vulputate nec rhoncus mattis, consequat non eros.';

	$i++;

	$orders[$i]['id'] = $i;
	$orders[$i]['type_id'] = 2;
	$orders[$i]['due_date'] = date("2014-01-10 04:30:00");
	$orders[$i]['date_submitted'] = date("2014-01-10 04:30:00");
	$orders[$i]['status_id'] = 1;
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nibh purus, vulputate nec rhoncus mattis, consequat non eros. In non purus justo. Praesent accumsan, massa in volutpat congue, erat quam laoreet elit, ac tincidunt erat mauris non est. Aliquam tincidunt adipiscing erat sed commodo. Curabitur suscipit eros eros, ac feugiat erat pulvinar sit amet. Etiam id quam sagittis, vehicula nisi non, blandit urna. Nunc pulvinar urna a tincidunt dictum. Curabitur id sodales tortor. Aenean euismod diam ac leo aliquam, ac accumsan eros euismod. Nulla nisl ligula, laoreet sed egestas at, facilisis vel tortor.';

	$i++;

	$orders[$i]['id'] = $i;
	$orders[$i]['type_id'] = 4;
	$orders[$i]['due_date'] = date("2013-12-25 00:00:00");
	$orders[$i]['date_submitted'] = date("2014-01-01 00:00:00");
	$orders[$i]['status_id'] = 1;
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nibh purus, vulputate nec rhoncus mattis, consequat non eros. In non purus justo. Praesent accumsan, massa in volutpat congue, erat quam laoreet elit, ac tincidunt erat mauris non est. Aliquam tincidunt adipiscing erat sed commodo. Curabitur suscipit eros eros, ac feugiat erat pulvinar sit amet. Etiam id quam sagittis, vehicula nisi non, blandit urna. Nunc pulvinar urna a tincidunt dictum. Curabitur id sodales tortor.';

	$i++;

	$orders[$i]['id'] = $i;
	$orders[$i]['type_id'] = 5;
	$orders[$i]['due_date'] = date("2014-03-20 04:30:00");
	$orders[$i]['date_submitted'] = date("2014-03-21 04:30:00");
	$orders[$i]['status_id'] = 1;
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nibh purus, vulputate nec rhoncus mattis, consequat non eros. In non purus justo. Praesent accumsan, massa in volutpat congue, erat quam laoreet elit, ac tincidunt erat mauris non est. Aliquam tincidunt adipiscing erat sed commodo. Curabitur suscipit eros eros, ac feugiat erat pulvinar sit amet. Etiam id quam sagittis, vehicula nisi non, blandit urna. Nunc pulvinar urna a tincidunt dictum. Curabitur id sodales tortor. Aenean euismod diam ac leo aliquam, ac accumsan eros euismod. Nulla nisl ligula, laoreet sed egestas at, facilisis vel tortor.';

	$i++;

	$orders[$i]['id'] = $i;
	$orders[$i]['type_id'] = 3;
	$orders[$i]['due_date'] = date("2014-01-10 04:30:00");
	$orders[$i]['date_submitted'] = date("2014-01-10 04:30:00");
	$orders[$i]['status_id'] = 1;
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

	return $orders;
}
?>