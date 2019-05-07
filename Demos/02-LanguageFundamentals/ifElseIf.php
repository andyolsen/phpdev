<?php
$hour = (int)date("h");
if ($hour < 12)
{
  echo "<b>Good morning!</b>";
}
elseif ($hour < 17) 
{
  echo "<b>Good afternoon!</b>";
}
else 
{
  echo "<b>Good evening!</b>";
}
?>