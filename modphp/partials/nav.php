<?php
session_start();
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
}

?>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><?php echo "Hello $username ";?>Website</a>
		</div>	
		<ul class="nav navbar-nav navbar-right">
			<li><a href="home.php">Home</a></li>
			<li><a href="menu.php">Menu</a></li>
			<li><a href="items.php">Items</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
</nav>