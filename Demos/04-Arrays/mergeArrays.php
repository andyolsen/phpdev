<?php
$andyCars = ["Nova", "Peugeot", "Rover"];
$jayneCars = ["Fiesta", "Mazda"];

$allCars = array_merge($andyCars, $jayneCars);   // Multiple arrays allowed.
echo join(",", $allCars);
?>