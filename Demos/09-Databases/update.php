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
	$stmt = $conn->prepare('UPDATE Employees SET Salary = Salary * 1.10');
	$stmt->execute(); 

    $msg = "All employees given 10% payrise. Have a nice day.";
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