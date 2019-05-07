<?php
function sortByLength($str1, $str2)
{
  return strlen($str1) <=> strlen($str2);
}

$players = ["Toshack", "Leeeeeeeeeeeeon", "Curt", "MagicDaps"];

usort($players, "sortByLength");
echo join(",", $players) . "<br>";
?>