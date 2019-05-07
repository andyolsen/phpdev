<?php
function displayMessage($message, $count)
{
  for ($i = 0; $i < $count; $i++)
  {
    echo $message . "<br>";
  }
}

// Client code.
displayMessage("Hello", 3);
displayMessage("Goodbye", 1);
?>