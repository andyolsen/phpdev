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

	// Simple hard-coded delete.
	$stmt = $conn->prepare('DELETE Employees WHERE Salary < 5000');
	$stmt->execute(); 

    $msg = "Deleted employees who earn less than £5K. It's a dog-eat-dog world.";
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