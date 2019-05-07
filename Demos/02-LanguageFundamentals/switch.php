<?php
$month = (int)date("m");
echo "Month $month is in ";

switch ($month) 
{
  case 12:
  case 1:
  case 2:
    echo "winter";
    break;

  case 3:
  case 4:
  case 5:
    echo "spring";
    break;

  case 6:
  case 7:
  case 8:
    echo "summer";
    break;
  
  default:
    echo "autumn";
    break;
}
?>