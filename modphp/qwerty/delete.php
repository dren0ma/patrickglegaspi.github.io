<?php

$index = $_GET['index'];
$string = file_get_contents("assets/items.json");
$items = json_decode($string, true);

//delete task from array $items

// $updated_items = array_splice($items, $index, 1);  

//assign to a new variable if 'by reference'

//array_splice($items, $index, 1); last resort

unset($items[$index]);


//update json file
$file = fopen('assets/items.json', 'w');
fwrite($file, json_encode($items, JSON_PRETTY_PRINT));
fclose($file);

echo "Item Deleted";

header('location: menu.php');

?>