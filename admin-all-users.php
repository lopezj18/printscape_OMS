<?php
session_start();
require_once("header.php");
require_once("authenticate.php");
$url = explode('?tabletype=', get_url());
$tabletype = $url[1];
?>
<style type="text/css">

</style>

<form class="formtable" action="process-delete-users.php" method="POST" enctype="multipart/form-data">
<h1 class="h1_titles">All Users</h1>
<?php
	$users = retrieve_users();
	echo build_users_table($users, $tabletype);
?>
</form>

<?php
include("footer.php");
?>