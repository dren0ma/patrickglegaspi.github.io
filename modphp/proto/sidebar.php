<div id='sidebar'>
	<form method="POST" action="authenticate.php">
		<div class="field">
			<label class="label" for="email">Username:</label>
			<div class="control has-icons-left has-icons-right">
				<input type="text" class="input" id="username" name="username">
				<span class="icon is-small is-left">
					<i class="fas fa-user"></i>
				</span>
			</div>
			<p class="help">asdasdfasdfasdf</p>
		</div>
		<div class="field">
			<label class="label" for="email">Password:</label>
			<div class="control">
				<input type="text" class="input" id="password" name="password">
			</div>
		</div>
		<div class="checkbox">
			<label><input type="checkbox"> Remember me</label>
		</div>
		<button type="submit" class="btn btn-default" id=btnsubmit>Submit</button>
		<button type="submit" class="btn btn-default" id=btnregister>Register</button>
	</form>
</div>
