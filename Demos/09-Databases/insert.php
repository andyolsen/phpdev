<?php 

require 'employee.php';

$servername = "localhost";
$username = "root";
$password = "SHX5RwamWFz7pB";
$employees = [];

try 
{
    $conn = new PDO("mysql:host=$servername;dbname=MyDatabase", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// Simple hard-coded insert.
	$stmt = $conn->prepare('INSERT INTO Employees(Name, Salary, Region) VALUES(:name, :salary, :region)');
	$stmt->execute([
		'name' => 'Ola',
		'salary' => 1234,
		'region' => 'Norway']); 

    $msg = "Employee inserted successfully";
}
catch(PDOException $ex)
{
    $msg = "Connection failed: " . $ex->getMessage();
}
?>

<html>
<body>
	<h4><?php echo $msg ?> </h4>
</body>
</html>