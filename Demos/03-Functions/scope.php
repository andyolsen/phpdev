<?php 
$dbName = null;

function initDB($name)
{
  global $dbName;  
  if (!$dbName) 
    $dbName = $name;
  else
    throw new Exception("Database name has already been set");
}

function queryDB()
{
  global $dbName;
  echo "TODO, add code to query $dbName<br>";
}

function updateDB()
{
  global $dbName;
  echo "TODO, add code to query $dbName<br>";
}

// Client code.
initDB("Server=.;Database=Northwind");
queryDB();
updateDB();
?>