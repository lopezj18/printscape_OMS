<?php
session_start();
require_once("authenticate.php");
require_once("header.php");
?>

<form class="sign_up_form" action="process-sign-up.php" method="POST" enctype="multipart/form-data">
	 <div>
     <h1>Create a User Account</h1>
    <p><input type="hidden" placeholder="" name="newuser_id"></p>
    <p><input type="text" placeholder="Username" name="username" maxlength="20" required></p>
    <p><input type="password" placeholder="Password" name="password" maxlength="20" required></p>
    <p><input type="text" placeholder="First Name" name="first_name" required></p>
    <p><input type="text" placeholder="Last Name" name="last_name" required></p>
    <p><input type="email" placeholder="Email" name="email" required></p>
   <p><select name="roles" required>
   <option value="">Pick a user role</option>
			<?php $roles = retrieve_role_types();
						echo build_role_options($roles);?>
    </select></p>
	<p><input type="submit" name="submit" value="Submit" class="btn"></p>
    </div>
<?php
include("footer.php");
?> 