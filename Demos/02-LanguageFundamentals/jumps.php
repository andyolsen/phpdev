<?php
for ($i = 1; $i < 20; $i++)
{
  if ($i % 10 == 0)
    break; 

  if ($i % 3 == 0)
    continue;

  echo "i is $i <br>";
}
echo "The end";
?>