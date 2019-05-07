<?php
try 
{
  // Some code that might throw an exception…
  throw new Exception("Deliberate exception!");
}
catch (Exception $ex) 
{
  echo "Exception occurred: " . $ex->getMessage() . "<br>";
}
finally 
{
  echo "Code here will always be executed - good place to do tidying up!<br>";
}
?>