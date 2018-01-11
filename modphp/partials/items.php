<?php 

$item1 = [
	'name' => 'Neapolitan',
	'description' => 'Mozzarella, tomatoes, basil leaves, oregano, olive oil',
	'price' => '500',
	'img' => '../img/pizza.jpg',
	'category' => 'Pizza'
];

$item2 = [
	'name' => 'Pepperoni',
	'description' => 'Mozzarella, provolone, onions, pepperoncini',
	'price' => '500',
	'img' => '../img/pizza.jpg',
	'category' => 'Pizza'
];

$item3 = [
	'name' => 'Spaghetti Bolognese',
	'description' => 'Slow braised beef and tomato',
	'price' => '300',
	'img' => '../img/pasta.jpg',
	'category' => 'Pasta'
];

$item4 = [
	'name' => 'Pomodoro',
	'description' => 'Classic tomato sauce, basil, parmesan',
	'price' => '250',
	'img' => '../img/pasta.jpg',
	'category' => 'Pasta'
];

$item5 = [
	'name' => 'Mushroom Truffle',
	'description' => 'Mushroom, basil, truffle oil fontinella, goat cheese, mozzarella, parmigiano',
	'price' => '600',
	'img' => '../img/pizza.jpg',
	'category' => 'Pizza'
];

$item6 = [
	'name' => 'Navona',
	'description' => 'Fire Blistered Tomatoes, Marinated Carrots, Shaved Onion, Crispy Bread, Basil Balsamic',
	'price' => '100',
	'img' => '../img/salad.jpg',
	'category' => 'Salad'
];

$items = [$item1, $item2, $item3, $item4, $item5, $item6];

// foreach ($items as $item) {
// 	foreach ($item as $key => $value) {
// 		echo "$key: $value <br>";
// 	}
// 	echo "<hr>";
// }
function display_title(){
	echo "Item Page";
}

function display_content(){
	global $items;
	foreach ($items as $item) {
		echo "<div class='col-md-4 thumbnail'>";
			echo "<img src='".$item['img']."'>";
			echo "<div class='caption'";
				echo "Name: ".$item['name']."<br>";
				echo "Description: ".$item['description']."<br>";
				echo "Price: P".$item['price']."<br>";
			echo "</div>";
		echo "</div>";
	}

}

require "template.php";

?>



<!-- 	// echo "<div class='container-fluid'";
	// 	echo "<div class='row'>";
	// 		foreach ($items as $item) {
	// 			echo "<div class='col-md-4'>";
	// 				echo "<div class='thumbnail'";
	// 					echo "<img src='".$item['img']."'>";
	// 					echo "<div class='caption'";
	// 						echo "Name: ".$item['name']."<br>";
	// 						echo "Description: ".$item['description']."<br>";
	// 						echo "Price: P".$item['price']."<br>";
	// 					echo "</div>";
	// 				echo "</div>";
	// 			echo "</div>";
	// 		}
	// 	echo "</div>";
	// echo "</div>"; -->