<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title><?php display_title(); ?></title>

	
	<!--   imports bulma   -->
	<link rel="stylesheet" type="text/css" href="bulma/bulma.css">

	<!--   imports custom stylesheets   -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--   import fontaweseome   -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

</head>
<body>
	<?php display_content(); ?>
	

	<?php require "footer.php"; ?>
	
	<!--   imports jQuery   -->
	<script src="js/jquery-3.2.1.min.js"></script>

	<!--   import custom javascript   -->
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>