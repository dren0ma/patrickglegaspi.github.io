<!DOCTYPE html>
<html>
<head>
	<title>12 Days of Christmas</title>

	<!--    imports bootstrap    -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<!--    imports custom stylesheets    -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>

	<h1>12 Days of Christmas</h1>


	<button></button>










	<?php
	for ($i=0; $i < 12; $i++) { 
		echo "<br>On the " . get_days($i) . " day of Christmas my true love sent to me: <br>";
		echo get_gifts($i) . "<br>";
	}
	?>
		
	<!--    import custom javascript -->
	<script type="text/javascript" src="js/script.js"></script>

	<!--   imports jQuery   -->
	<script src="js/jquery-3.2.1.min.js"></script>

	<!--    imports bootstrap javascript   -->
	<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>


<?php

	function get_days($i){
		$days = ['first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth', 'eleventh', 'twelfth'];

		return $days[$i];
	}

	function get_gifts ($i){
		$gifts = ['A Partridge in a Pear Tree', 
					'Two Turtle Doves',
					'Three French Hens',
					'Four Calling Birds',
					'Five Golden Rings',
					'Six Geese a-Laying',
					'Seven Swans a-Swimming',
					'Eight Maids a-Milking',
					'Nine Ladies Dancing',
					'Ten Lords a-Leaping',
					'Eleven Pipers Piping',
					'Twelve Drummers Drumming'];

		$line = "";

		for ($x=$i; $x >= 0; $x--) { 
			$line .= $gifts[$x] . ", ";

			if ($i>0) {
				$line = str_ireplace("A Partridge", "and a Partridge", $line);
			}
		}

		$line [strlen($line)-2] = ".";

		return $line;
	}




?>