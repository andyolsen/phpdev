<?php 
function displayFavouriteThings($name, ...$things)
{
  echo "$name has " . count($things) . " favourite things:<ol>";
  for ($i = 0; $i < count($things); $i++)
  {
    echo "<li>$things[$i]</li>" ;
  }
  echo "</ol>";
}

# Client code.
displayFavouriteThings("Andy", "Jayne", "Emily", "Tom", 3, "Swans")
?>