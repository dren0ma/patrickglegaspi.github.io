<?php

$_SESSION['username'] = $_POST['username'];

echo "Hello ".$_SESSION['username'];

require "qwerty.php";

?>