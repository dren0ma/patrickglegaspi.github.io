<!DOCTYPE html>
<html>
<head>
	<title>12 Days of Christmas</title>
</head>
<body>

	<h1>12 Days of Christmas</h1>

	<?php
	for ($i=0; $i < 12; $i++) { 
		echo "<br>On the " . get_days($i) . " day of Christmas my true love sent to me: <br>";
		echo get_gifts($i) . ".<br>";
	}
	?>
		



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
		for ($x=0; $x <= $i; $x++) { 
			$line .= $gifts[$x] . ", ";
		}
		return $line;
	}




?>