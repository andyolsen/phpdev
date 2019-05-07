<?php 
declare(strict_types=1);

function displayMessage(string $message, int $count)
{
  for ($i = 0; $i < $count; $i++)
  {
    echo $message . "<br>";
  }
}

// Client code.
displayMessage("Hello", 3);            // OK
displayMessage("Goodbye", 1);          // OK
displayMessage("Goodbye", "wibble");   // TypeError
?>