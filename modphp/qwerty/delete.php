<?php

$index = $_GET['index'];
$string = file_get_contents("assets/items.json");
$items = json_decode($string, true);

//delete task from array $items
array_splice($items, $index, 1);

//update json file
$file = fopen('assets/items.json', 'w');
fwrite($file, json_encode($items, JSON_PRETTY_PRINT));
fclose($file);

echo "Item Deleted";

header('location: menu.php');

?>