<?php
session_start();
$_SESSION['username'] = $_POST['username'];
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
}
?>

<form action="../authenticate.php" method="POST">
	<div class="form-group">
		<label for="username">Username:</label>
		<input type="text" class="form-control" name="username">
	</div>
	<div class="form-group">
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" name="password">
	</div>
	<div class="checkbox">
		<label><input type="checkbox">Remember me</label>
	</div>
		<button type="submit" class="btn btn-default" value='Login'>Login</button>
</form>

