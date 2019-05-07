<?php
$servername = "localhost";
$username = "root";
$password = "SHX5RwamWFz7pB";

try 
{
    $conn = new PDO("mysql:host=$servername;dbname=MyDatabase", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection opened/closed sucessfully"; 
}
catch(PDOException $ex)
{
    echo "Connection failed: " . $ex->getMessage();
}
?>