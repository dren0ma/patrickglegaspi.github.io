<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title><?php display_title(); ?></title>

	<!--    imports bootstrap    -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

	<!--   imports jQuery   -->
	<script src="../js/jquery-3.2.1.min.js"></script>

	<!--    imports bootstrap javascript   -->
	<script src="../bootstrap/js/bootstrap.min.js"></script>

	<!--    imports custom stylesheets    -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<!--    import custom javascript -->
	<script type="text/javascript" src="../js/script.js"></script>

</head>
<body>
	<?php require "nav.php"; ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<?php display_content(); ?>
			</div>
			<div class="col-md-4">
				<?php require "sidebar.php"; ?>
			</div>
		</div>
	</div>
	

	<?php require "footer.php"; ?>
	
</body>
</html>