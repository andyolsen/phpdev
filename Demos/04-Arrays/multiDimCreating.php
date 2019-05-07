<?php

$days = array();
$days[0] = array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
$days[1] = array(0, 31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

echo "There are " . count($days)    . " rows <br>";
echo "There are " . count($days[0]) . " columns in row 0 <br>";
echo "There are " . count($days[1]) . " columns in row 1 <br>";

$days = array(
  array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31),
  array(0, 31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31)
);

echo "There are " . count($days)    . " rows <br>";
echo "There are " . count($days[0]) . " columns in row 0 <br>";
echo "There are " . count($days[1]) . " columns in row 1 <br>";

$days = [
  [0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
  [0, 31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]
];

echo "There are " . count($days)    . " rows <br>";
echo "There are " . count($days[0]) . " columns in row 0 <br>";
echo "There are " . count($days[1]) . " columns in row 1 <br>";
?>