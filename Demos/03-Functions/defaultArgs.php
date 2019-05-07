<?php 
function bookFlight($from, $to, $adults=1, $children=0)
{
  echo "Flight from $from to $to ($adults adults, $children children)<br>";
}

// Client code.
bookFlight("BRS", "VER", 2, 2);
bookFlight("LHR", "VIE", 4);
bookFlight("LHR", "OSL");
?>