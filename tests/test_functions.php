<?php

/*

First query
-----------------
user.id - automatic
username
password
first_name
last_name
email
phone
role_id - automatic
date_created - automatic


Second query
-----------------
customer.id - automatic
user_id - use last insert id
company
address1
address2
city
state
zip

Blank sample code

$customers[$i]['username'] = '';
$customers[$i]['password'] = '123';
$customers[$i]['first_name'] = '';
$customers[$i]['last_name'] = '';
$customers[$i]['email'] = '';
$customers[$i]['phone'] = '';
$customers[$i]['role_id'] = '1';
$customers[$i]['date_created'] = date('m-d-Y H:i:s');
$customers[$i]['company'] = '';
$customers[$i]['address1'] = '';
$customers[$i]['address2'] = '';
$customers[$i]['city'] = '';
$customers[$i]['state'] = '';
$customers[$i]['zip'] = '';

*/
function create_admins(){
	$admins = array();

	$admins[$i]['username'] = 'test1';
	$admins[$i]['password'] = '123';
	$admins[$i]['first_name'] = 'test';
	$admins[$i]['last_name'] = 'user';
	$admins[$i]['email'] = 'test@user.com';
	$admins[$i]['role_id'] = '2';
	$admins[$i]['date_created'] = date('m-d-Y H:i:s');

	return $admins;
}

//22 customers
function create_customers(){
	$customers = array();

	$i=0;

	$customers[$i]['username'] = 'brule';
	$customers[$i]['password'] = '123';
	$customers[$i]['first_name'] = 'Steve';
	$customers[$i]['last_name'] = 'Brule';
	$customers[$i]['email'] = 'sbrule@dingus.com';
	$customers[$i]['phone'] = '911';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Check it Out!';
	$customers[$i]['address1'] = 'Abandoned Warehouse';
	$customers[$i]['address2'] = 'Lot #3';
	$customers[$i]['city'] = 'Brulesville';
	$customers[$i]['state'] = 'USA';
	$customers[$i]['zip'] = '12355';

	$i++;

	$customers[$i]['username'] = 'rickjames';
	$customers[$i]['password'] = '123';
	$customers[$i]['first_name'] = 'Rick';
	$customers[$i]['last_name'] = 'James';
	$customers[$i]['email'] = 'imrickjames@bitch.com';
	$customers[$i]['phone'] = '555-5821';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Comedic Central';
	$customers[$i]['address1'] = '329 Crack Alley';
	$customers[$i]['address2'] = 'Box #37';
	$customers[$i]['city'] = 'New York';
	$customers[$i]['state'] = 'New York';
	$customers[$i]['zip'] = '82846';

	$i++;

	$customers[$i]['username'] = 'gaben';
	$customers[$i]['password'] = '123';
	$customers[$i]['first_name'] = 'Gabe';
	$customers[$i]['last_name'] = 'Newell';
	$customers[$i]['email'] = 'basedgaben@valvesoftware.com';
	$customers[$i]['phone'] = '1(348)367-3846';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Valve Software';
	$customers[$i]['address1'] = '301 Brick st';
	$customers[$i]['address2'] = 'Suite 102';
	$customers[$i]['city'] = 'Gabentown';
	$customers[$i]['state'] = 'KY';
	$customers[$i]['zip'] = '58934';

	$i++;

	$customers[$i]['username'] = 'jackie_chan_clan';
	$customers[$i]['password'] = '123';
	$customers[$i]['first_name'] = 'Jackie';
	$customers[$i]['last_name'] = 'Chan';
	$customers[$i]['email'] = 'jackiechanclan@yahoo.com';
	$customers[$i]['phone'] = '(387)8347232';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Breakbox Studios';
	$customers[$i]['address1'] = 'Breakitdown Dr';
	$customers[$i]['address2'] = '#1892';
	$customers[$i]['city'] = 'Furytown';
	$customers[$i]['state'] = 'CA';
	$customers[$i]['zip'] = '48302';

	$i++;

	$customers[$i]['username'] = 'r_williams027';
	$customers[$i]['password'] = '123';
	$customers[$i]['first_name'] = 'Robin';
	$customers[$i]['last_name'] = 'Williams';
	$customers[$i]['email'] = 'please send all mail via pidgeon';
	$customers[$i]['phone'] = '783-348-2392';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Jumunji Adventures';
	$customers[$i]['address1'] = '8 Tree Ln';
	$customers[$i]['address2'] = '3 rocks passed the wildebeast herd near the waterfall';
	$customers[$i]['city'] = 'Itsa Jungle Owthear';
	$customers[$i]['state'] = 'No';
	$customers[$i]['zip'] = '00000';

	$i++;

	$customers[$i]['username'] = 'morty123';
	$customers[$i]['password'] = '123';
	$customers[$i]['first_name'] = 'Morty';
	$customers[$i]['last_name'] = '???';
	$customers[$i]['email'] = 'cool_morty@hotmail.com';
	$customers[$i]['phone'] = '231-4932';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Student';
	$customers[$i]['address1'] = 'My mom&#39s house';
	$customers[$i]['address2'] = '';
	$customers[$i]['city'] = 'Outsville';
	$customers[$i]['state'] = 'ND';
	$customers[$i]['zip'] = '56792';

	$i++;

	$customers[$i]['username'] = '';
	$customers[$i]['password'] = '123';
	$customers[$i]['first_name'] = '';
	$customers[$i]['last_name'] = '';
	$customers[$i]['email'] = '';
	$customers[$i]['phone'] = '';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = '';
	$customers[$i]['address1'] = '';
	$customers[$i]['address2'] = '';
	$customers[$i]['city'] = '';
	$customers[$i]['state'] = '';
	$customers[$i]['zip'] = '';

	$i++;

	$customers[$i]['username'] = 'jimbles';
	$customers[$i]['password'] = 'jimbly9000';
	$customers[$i]['first_name'] = 'Jimbles';
	$customers[$i]['last_name'] = 'Notronbo';
	$customers[$i]['email'] = 'peoplearefood@gmail.com';
	$customers[$i]['phone'] = '412-555-0483';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Cock Rockets, INC.';
	$customers[$i]['address1'] = '123 Fake Street';
	$customers[$i]['address2'] = 'Apartment 222';
	$customers[$i]['city'] = 'Miami';
	$customers[$i]['state'] = 'FL';
	$customers[$i]['zip'] = '12309';

	$i++;

	$customers[$i]['username'] = 'dicksharts';
	$customers[$i]['password'] = 'wowc00lf@ct5';
	$customers[$i]['first_name'] = 'Dick';
	$customers[$i]['last_name'] = 'Shart';
	$customers[$i]['email'] = 'ballsmash@sharts.com';
	$customers[$i]['phone'] = '(321) 828-0091';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Dick Shart&#39;s 2006 Ball Smash';
	$customers[$i]['address1'] = '65 Beanbag Lane';
	$customers[$i]['address2'] = '';
	$customers[$i]['city'] = 'Portland';
	$customers[$i]['state'] = 'Oregon';
	$customers[$i]['zip'] = '98342';

	$i++;

	$customers[$i]['username'] = 'drpoopydildo';
	$customers[$i]['password'] = '1know1madoct0rtoo';
	$customers[$i]['first_name'] = 'Dr. Poopy';
	$customers[$i]['last_name'] = 'Dildo, PhD';
	$customers[$i]['email'] = 'drpoopy@dildo.com';
	$customers[$i]['phone'] = '444-146-0983';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Dr. Poopy Chiropractics';
	$customers[$i]['address1'] = '900 Dees Nuts Ave.';
	$customers[$i]['address2'] = 'Suite 200';
	$customers[$i]['city'] = 'Detroit';
	$customers[$i]['state'] = 'MI';
	$customers[$i]['zip'] = '24354';

	$i++;

	$customers[$i]['username'] = 'itsmehp';
	$customers[$i]['password'] = 'ch053n1';
	$customers[$i]['first_name'] = 'Harry';
	$customers[$i]['last_name'] = 'Muthafuckin&#39;Potter';
	$customers[$i]['email'] = 'imawizardbitch@gryffindor.com';
	$customers[$i]['phone'] = '777-333-7777';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Hogwarts';
	$customers[$i]['address1'] = '4 Privet Drive';
	$customers[$i]['address2'] = 'The Cupbard Under the Stairs';
	$customers[$i]['city'] = 'Little Whinging';
	$customers[$i]['state'] = 'ALABAMA';
	$customers[$i]['zip'] = '85472';

	$i++;

	$customers[$i]['username'] = 'sbuscemi1999';
	$customers[$i]['password'] = 'nobodythinksimhotdothey';
	$customers[$i]['first_name'] = 'Steven';
	$customers[$i]['last_name'] = 'Buscemi';
	$customers[$i]['email'] = 'eyesofwonder@reservoirdogs.com';
	$customers[$i]['phone'] = '(347) 956-9800';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Washed Up Laundry Services, LLC.';
	$customers[$i]['address1'] = '466 Gobbler St.';
	$customers[$i]['address2'] = '';
	$customers[$i]['city'] = 'Los Angeles';
	$customers[$i]['state'] = 'CA';
	$customers[$i]['zip'] = '89000';

	$i++;

	$customers[$i]['username'] = 'mcpeepants';
	$customers[$i]['password'] = 'g1mm3c4ndy';
	$customers[$i]['first_name'] = 'MC';
	$customers[$i]['last_name'] = 'PeePants';
	$customers[$i]['email'] = 'iwantcandy@bubblegumtaffy.net';
	$customers[$i]['phone'] = '612-612-6126';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'MC Peepants Productions IN DA HIZZOUZE';
	$customers[$i]['address1'] = '612 Wharf Avenue';
	$customers[$i]['address2'] = '';
	$customers[$i]['city'] = 'Atlanta';
	$customers[$i]['state'] = 'GA';
	$customers[$i]['zip'] = '45636';

	$i++;

	$customers[$i]['username'] = 'itsmetomhank';
	$customers[$i]['password'] = 'password';
	$customers[$i]['first_name'] = 'Thomas';
	$customers[$i]['last_name'] = 'Hank';
	$customers[$i]['email'] = 'tomhank@itsmetomhank.org';
	$customers[$i]['phone'] = '(175) 703-5480';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Tom Hank, Actor';
	$customers[$i]['address1'] = '866 Beverly Dr.';
	$customers[$i]['address2'] = 'Suite 900';
	$customers[$i]['city'] = 'Santa Monica';
	$customers[$i]['state'] = 'CA';
	$customers[$i]['zip'] = '95634';

	$i++;

	$customers[$i]['username'] = 'oohlongjohnson';
	$customers[$i]['password'] = 'ohthelivelongday';
	$customers[$i]['first_name'] = 'Long';
	$customers[$i]['last_name'] = 'Johnson';
	$customers[$i]['email'] = 'imacat@meow.com';
	$customers[$i]['phone'] = '(040) 968-7892';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Cat Speech Therapy (For Cats)';
	$customers[$i]['address1'] = '300 Catnip Way';
	$customers[$i]['address2'] = 'Bldg. #7';
	$customers[$i]['city'] = 'Purrsburgh';
	$customers[$i]['state'] = 'PA';
	$customers[$i]['zip'] = '15205';

	$i++;

	$customers[$i]['username'] = 'jokster';
	$customers[$i]['password'] = 'imreallyinsecureandlashoutovernothing1';
	$customers[$i]['first_name'] = 'Ben Jammin';
	$customers[$i]['last_name'] = 'Jokster Walsh';
	$customers[$i]['email'] = 'bestinshow@foreverago.com';
	$customers[$i]['phone'] = '412-867-5309';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Dish Washing With My Tears, LLC.';
	$customers[$i]['address1'] = '40 Latitude Way';
	$customers[$i]['address2'] = '';
	$customers[$i]['city'] = 'Bitchburgh';
	$customers[$i]['state'] = 'PA';
	$customers[$i]['zip'] = '12309';

	$i++;

	$customers[$i]['username'] = 'veryscreennameverywow';
	$customers[$i]['password'] = 'thisisdogehello';
	$customers[$i]['first_name'] = 'Doge';
	$customers[$i]['last_name'] = 'Shibe';
	$customers[$i]['email'] = 'vote4doge@suchemail.com';
	$customers[$i]['phone'] = '909-872-0812';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Much Meme Such Funny Wow';
	$customers[$i]['address1'] = '6 Doge Dr.';
	$customers[$i]['address2'] = 'Such Apt. 7';
	$customers[$i]['city'] = 'Dogertown';
	$customers[$i]['state'] = 'WI';
	$customers[$i]['zip'] = '98634';

	$i++;

	$customers[$i]['username'] = 'stoptouchingme';
	$customers[$i]['password'] = 'paws0ff';
	$customers[$i]['first_name'] = 'Fish';
	$customers[$i]['last_name'] = 'DaCat';
	$customers[$i]['email'] = 'saltyfeesh@ugh.net';
	$customers[$i]['phone'] = '543-991-0240';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Stay at Home Jerkass';
	$customers[$i]['address1'] = '3000 Westpointe Drive';
	$customers[$i]['address2'] = 'Apt. #107';
	$customers[$i]['city'] = 'Hissburgh';
	$customers[$i]['state'] = 'PA';
	$customers[$i]['zip'] = '15205';

	$i++;

	$customers[$i]['username'] = 'daaaaaave';
	$customers[$i]['password'] = 'whatwouldyouhavedone';
	$customers[$i]['first_name'] = 'Gale';
	$customers[$i]['last_name'] = 'N.';
	$customers[$i]['email'] = 'gouda@gale.com';
	$customers[$i]['phone'] = '800-441-3425';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Bodybuilding & Cheese Enthuiasts';
	$customers[$i]['address1'] = '492 Kayak Ln.';
	$customers[$i]['address2'] = '';
	$customers[$i]['city'] = 'Suburbia';
	$customers[$i]['state'] = 'NY';
	$customers[$i]['zip'] = '45876';

	$i++;

	$customers[$i]['username'] = 'lastminutetowinit';
	$customers[$i]['password'] = 'iwanteverythingforfree';
	$customers[$i]['first_name'] = 'Beth';
	$customers[$i]['last_name'] = 'Garlic';
	$customers[$i]['email'] = 'Luv2BartZ@hotmail.com';
	$customers[$i]['phone'] = '482-996-5234';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Personal DJ';
	$customers[$i]['address1'] = '86 Skrillex Lane';
	$customers[$i]['address2'] = '#4';
	$customers[$i]['city'] = 'Anchorage';
	$customers[$i]['state'] = 'Alaska';
	$customers[$i]['zip'] = '09015';

	$i++;

	$customers[$i]['username'] = 'pls';
	$customers[$i]['password'] = 'yudodis';
	$customers[$i]['first_name'] = 'Gooby';
	$customers[$i]['last_name'] = 'PLS';
	$customers[$i]['email'] = 'creyevrytim@dolanpls.com';
	$customers[$i]['phone'] = '411';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Y Must U Hurt Me Liek Dis';
	$customers[$i]['address1'] = '00 Crey St.';
	$customers[$i]['address2'] = '';
	$customers[$i]['city'] = 'Houston';
	$customers[$i]['state'] = 'TX';
	$customers[$i]['zip'] = '78409';

	$i++;

	$customers[$i]['username'] = 'blobby';
	$customers[$i]['password'] = 'yadangidgit';
	$customers[$i]['first_name'] = 'Blobby';
	$customers[$i]['last_name'] = 'Blobberson';
	$customers[$i]['email'] = 'madashell@yahoo.com';
	$customers[$i]['phone'] = '7888-945-6732';
	$customers[$i]['role_id'] = '1';
	$customers[$i]['date_created'] = date('m-d-Y H:i:s');
	$customers[$i]['company'] = 'Hell on Wheels';
	$customers[$i]['address1'] = '666 Penn Ave.';
	$customers[$i]['address2'] = '';
	$customers[$i]['city'] = 'Louisville';
	$customers[$i]['state'] = 'KY';
	$customers[$i]['zip'] = '65125';

}

//22 orders
function create_orders(){
	$orders = array();

	$i=0;

	$orders[$i]['type_id'] = '1';
	$orders[$i]['due_date'] = date('02-11-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit ante, in tincidunt dui. Suspendisse sodales ornare pellentesque.';

	$i++;

	$orders[$i]['type_id'] = '3';
	$orders[$i]['due_date'] = date('02-23-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit ante, in tincidunt dui.';

	$i++;

	$orders[$i]['type_id'] = '2';
	$orders[$i]['due_date'] = date('02-13-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit ante, in tincidunt dui. Suspendisse sodales ornare pellentesque.';

	$i++;

	$orders[$i]['type_id'] = '1';
	$orders[$i]['due_date'] = date('02-11-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit ante, in tincidunt dui.';

	$i++;

	$orders[$i]['type_id'] = '1';
	$orders[$i]['due_date'] = date('02-18-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

	$i++;

	$orders[$i]['type_id'] = '5';
	$orders[$i]['due_date'] = date('02-28-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit ante, in tincidunt dui. Suspendisse sodales ornare pellentesque.';

	$i++;

	$orders[$i]['type_id'] = '6';
	$orders[$i]['due_date'] = date('02-18-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

	$i++;

	$orders[$i]['type_id'] = '3';
	$orders[$i]['due_date'] = date('02-13-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

	$i++;

	$orders[$i]['type_id'] = '3';
	$orders[$i]['due_date'] = date('02-12-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit ante, in tincidunt dui.';

	$i++;

	$orders[$i]['type_id'] = '1';
	$orders[$i]['due_date'] = date('02-17-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

	$i++;

	$orders[$i]['type_id'] = '5';
	$orders[$i]['due_date'] = date('02-25-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit ante, in tincidunt dui. Suspendisse sodales ornare pellentesque.';

	$i++;

	$orders[$i]['type_id'] = '2';
	$orders[$i]['due_date'] = date('02-20-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit ante, in tincidunt dui.';

	$i++;

	$orders[$i]['type_id'] = '1';
	$orders[$i]['due_date'] = date('02-21-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit ante, in tincidunt dui. Suspendisse sodales ornare pellentesque.';

	$i++;

	$orders[$i]['type_id'] = '2';
	$orders[$i]['due_date'] = date('02-21-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

	$i++;

	$orders[$i]['type_id'] = '1';
	$orders[$i]['due_date'] = date('02-24-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit ante, in tincidunt dui.';

	$i++;

	$orders[$i]['type_id'] = '3';
	$orders[$i]['due_date'] = date('02-25-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

	$i++;

	$orders[$i]['type_id'] = '1';
	$orders[$i]['due_date'] = date('02-25-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit ante, in tincidunt dui. Suspendisse sodales ornare pellentesque.';

	$i++;

	$orders[$i]['type_id'] = '3';
	$orders[$i]['due_date'] = date('02-13-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

	$i++;

	$orders[$i]['type_id'] = '2';
	$orders[$i]['due_date'] = date('02-12-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit ante, in tincidunt dui.';

	$i++;

	$orders[$i]['type_id'] = '2';
	$orders[$i]['due_date'] = date('02-18-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit ante, in tincidunt dui.';

	$i++;

	$orders[$i]['type_id'] = '1';
	$orders[$i]['due_date'] = date('02-19-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

	$i++;

	$orders[$i]['type_id'] = '5';
	$orders[$i]['due_date'] = date('02-19-14 00:00:00');
	$orders[$i]['date_submitted'] = date('m-d-Y H:i:s');
	$orders[$i]['status_id'] = '1';
	$orders[$i]['instructions'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit ante, in tincidunt dui. Suspendisse sodales ornare pellentesque.';

	return $orders;
}

function create_user_orders(){
	$user_orders = array();

	for($i=0; $i<22; $i++){
		$user_orders[$i]['user_id'] = $i+1;
		$user_orders[$i]['order_id'] = $i;
	}

	return $user_orders;
}


?>