<?php
$myCars = ["Nova", "Peugeot", "Rover"];

array_unshift($myCars, "Mini");    // Multiple items can be prepended.
echo join(",", $myCars) . "<br>";

$removedItem = array_shift($myCars);
echo $removedItem . "<br>";
?>