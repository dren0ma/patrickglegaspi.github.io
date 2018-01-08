<?php
function print_table($row, $col){
	echo "<table>";

	for ($x=0; $x < $row; $x++) { 
		echo "<tr>";

		for ($y=0; $y < $col; $y++) { 
			echo "<td>Content</td>";
		}

		echo "</tr>";
	}

	echo "</table>";
}

function fact_this($num){
	$fact = 1;

	for ($i = $num; $i >= 1; $i--) { 
		$fact *= $i;
	}

	// echo "<h2>$num"."! is: $fact</h2>";
	return $fact;
}

function sum_this($numsum){
	$sum = 0;

	for ($i=0; $i <= $numsum; $i++) { 
		$sum += $i;
	}
	
	echo "<h2> Total Sum is: $sum</h2>";
}

?>