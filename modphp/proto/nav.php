<nav class="navbar" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
		<a class="navbar-item">Website Brand</a>

		<button class="burger navbar-burger">
			<span></span>
			<span></span>
			<span></span>
		</button>
	</div>

	<div class="navbar-menu">
		<div class="navbar-end">
			<a class="navbar-item" href="home.php">Home</a>
			<div class="navbar-item has-dropdownn is-hoverable">
				<a class="navbar-link" href="menu.php">Menu</a>
					<div class="navbar-dropdown is-boxed">
						<div class="navbar-item">Pizza</div>
						<div class="navbar-item">Pasta</div>
						<div class="navbar-item">Salad</div>
					</div>
				<a class="navbar-item" href="about.php">About</a>
				<a class="navbar-item" href="contact.php">Contact</a>
				<div>
				<?php echo isset($_SESSION['username']) ? '<li><a href="logout.php">Logout</a></li>' : '' ;?>
				</div>
			</div>
		</div>
 	</div>
</nav>

