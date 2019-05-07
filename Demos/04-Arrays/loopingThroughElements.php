<?php
$myCars = ["Nova", "Peugeot", "Rover"];

echo "Loop through array using a for loop<br>";
for ($i = 0; $i < count($myCars); $i++)
{
  echo "Car $i is a $myCars[$i] <br>";
}

echo "Loop through array using a foreach loop<br>";
foreach ($myCars as $car)
{
  echo $car . "<br>";
}
?>