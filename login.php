<?php
require_once("functions-lib.php");
if($_POST){
	$username = sanitize($_POST['username']);
	$password = sanitize($_POST['password']);
	$status = check_login($username, $password);
	//print_r ($_SESSION);
}
require_once("header.php");
?>
<h1 class="status"><?php echo $status ?></h1>
<form action="login.php" method="POST" >
	<div>
	    <h1>Login</h1>
		<p><input type="text" placeholder="Username" name="username"/></p>
	    <p><input type="password" placeholder="Password" name="password"/></p>
	    <p><input type="submit"  class="btn" value="Log In"></p>
	    <br>
    </div>
    
    <p class="sign_up">Don't have an account?<a class="sign_up_link" href="sign_up.php"> Click Here To Sign Up.</a>
</form>

<?php
require_once("footer.php");
?>