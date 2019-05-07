<?php
$days = [
  [0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
  [0, 31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]
];

$isLeap = (int)date("L");    // Is it a leapyear? Returns 0 or 1.
$month  = (int)date("n");    // Returns current month, 1-12. 

echo "There are " . $days[$isLeap][$month] . " days in this month<br>";

?>