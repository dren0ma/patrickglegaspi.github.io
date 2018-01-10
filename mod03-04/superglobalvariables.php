
<!-- 

-->


<!-- <form action="superglobalvariables.php" method="GET">   
	<input type="text" name="userName"><br>
	<input type="submit" name="submit" value="SubmitGET">

GET = data shows in URL



POST = hidden

</form> -->

<?php

/* space   %20

 tmlspecialchars(string)	sanitize user input

echo htmlspecialchars($_GET['input']) . " " . htmlspecialchars($_GET['name']);
action =target page      
default form : method=GET action=samepage

session_start(); on every page to retain _SESSION

*/


?>


<div class="field">
<form method="POST" action="authenticate.php">
	<div class="control">
		<label class="label">Username</label>
			<input class="input" type="text" name="username">
		<br>
	</div>
</div>
<div class="field">
	<div class="control">
		<label class="label">Password</label>
			<input class="input" type="password" name="password"><br>
	</div>
</div>
<div class="field">
	<div class="control">
		<input class="input" type="submit" value="Login">
	</div>
</div>
</form>

<?php require "qwerty.php"; 

?>



