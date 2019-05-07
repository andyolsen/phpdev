<?php
$days = [
  [0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
  [0, 31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]
];

echo "Loop through multidimensional array using for loops<br>";
for ($r = 0; $r < count($days); $r++)
{
  for ($c = 0; $c < count($days[$r]); $c++)
  {
    echo $days[$r][$c] . " ";
  }
  echo "<br>";
}

echo "Loop through multidimensional array using foreach loops<br>";
foreach ($days as $row)
{
  foreach ($row as $col) 
  {
    echo $col . " ";
  }
  echo "<br>";
}

?>