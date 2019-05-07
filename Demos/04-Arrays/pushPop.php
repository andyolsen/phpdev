<?php
$myCars = ["Nova", "Peugeot", "Rover"];

array_push($myCars, "Bugatti");    // Multiple items can be appended.
echo join(",", $myCars) . "<br>";

$removedItem = array_pop($myCars);
echo $removedItem . "<br>";
?>