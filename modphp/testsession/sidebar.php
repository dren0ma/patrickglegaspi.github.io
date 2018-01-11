<?php session_start(); ?>
<form action="authenticate.php" method="POST">
	<div class="form-group">
		<label>Username:</label>
		<input type="text" class="form-control" name="username">
	</div>
	<div class="form-group">
		<label>Password:</label>
		<input type="password" class="form-control" name="password">
	</div>
	<div class="checkbox">
		<label><input type="checkbox">Remember me</label>
	</div>
		<button type="submit" class="btn btn-default" name="submit" value="">Login</button>
		<button type="submit" class="btn btn-default" name="submit" value="">Register</button>
</form>

