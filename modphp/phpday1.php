<!DOCTYPE html>
<html>
<head>
	<title>PHP Day1</title>
	<style type="text/css">
		
		table, tr, td, th {
			border: 1px dotted black;
			border-collapse: collapse;
			text-align: center;
			height: 20px;
			width: 30px;
		}

	</style>
</head>
<body>

	
	<h1><?php echo "Hello World"?></h1>

	<?php
		echo "<h1>Hello World</h1>";

		$name = "Tuitt";

		echo "name is $name <br>";
		echo 'name is $name<br>';

		define("LOCATION", "www.qwerty.com");

		$site = LOCATION;

		echo $site;

		$num = 0;

		echo "<br>";
		echo $num++;
		echo "<br>";
		echo $num . "<br>";
		echo ++$num . "<br>";

		$word = "A";
		$word2 = "A1";
		$word3 = "Z";
		echo ++$word . "<br>";
		echo ++$word2 . "<br>";
		echo ++$word3 . "<br>";


		// 0 = false, any number = true
		// blank string = false, any string = true
		if (true) {
			echo "true";
		} else {
			echo "false";
		}

		echo "<br>";
		$phrase = "hello world" . "<br>";
		$phrase2 = "HELLO WORLD" . "<br>";
		$phrase3 = "the quick brown jumps over the FOX lazy dog." . "<br>";

		echo strtoupper($phrase);			//uppercase all
		echo strtolower($phrase2);			//lowercase all
		echo ucwords($phrase3);				//uppercase words
		echo ucfirst($phrase3);				//uppercase first word
		echo strpos($phrase3, "u");			//string starting position
		echo strpos($phrase3, "quick");
		echo stripos($phrase3, "QUICK");	//stripos case insensitive
		echo "<br>";
		echo substr($phrase3, 4);			//(string, position, # of char)
		echo substr($phrase3, 4, 5);
		echo "<br>";
		echo strlen($phrase3);				//number of char
		echo "<br>";

		$foxpos = stripos($phrase3, "FOX");
		echo substr($phrase3, $foxpos);
		// echo substr($phrase3, stripos($phrase3, "FOX"));

		$colors = ["red", "green", "blue", "yellow", "black", "white"];
		echo $colors[0];
		$numcol = count($colors);

	?>
	<ul>
	<?php
		for ($x=0; $x < $numcol; $x++) { 
			echo "<li>$colors[$x]</li>";
		}
	?>
	</ul>

	
	<?php
		echo "<ul>";
		for ($x=0; $x < $numcol; $x++) { 
			echo "<li style='background-color: $colors[$x];'>$colors[$x]</li>";
		}
		echo "</ul>";
	?>

	<?php
		// echo $phrase3[0];					//a string variable is also a string array
		$plen = strlen($phrase3);

		// for ($z=0; $z < $plen; $z++) { 
		// 	echo "$phrase3[$z] <br>";
		// }


		for ($z=0; $z < $plen; $z+=2) { 
			echo strtolower($phrase3[$z]);
			echo strtoupper($phrase3[$z+1]);
		}

	?>

	<table>
	<?php
		echo "<tr>";
		for ($x=0; $x <= 12; $x++) { 
			echo "<th>$x</th>";
		}
		echo "</tr>";

		for ($x=1; $x <= 12; $x++) { 
			echo "<tr><th>$x</th>";
			for ($y=1; $y <= 12; $y++) { 
				$prod = $y * $x;
				echo "<td>" . $prod . "</td>";
			}
			echo "</tr>";
		}
	?>
	</table>

	<br>
	<?php
		$sum = 0;
		$numm = 20;

		for ($i=0; $i <= $numm; $i++) { 
			$sum += $i;
		}
		
		echo "<h2>$sum</h2>";
	?>
	<br>

	<?php
		$fact = 1;
		$num3 = 9;

		for ($i = $num3; $i >= 1; $i--) { 
			$fact *= $i;
		}
		echo "<h2>$num3"."! is: $fact</h2>";
	?>

	<?php
	// include "functionslib.php";  	//include = site still runs without the file

	require "functionslib.php";			//require = required file is needed to run site
	print_table(5, 5);

	sum_this(10);

	echo fact_this(1);
	echo "<br>";
	echo fact_this(2);
	echo "<br>";
	echo fact_this(3);
	echo "<br>";
	echo fact_this(4);
	echo "<br>";
	echo fact_this(5);
	echo "<br>";


	global $varname;					//global declaration

	

	?>




	


</body>
</html>