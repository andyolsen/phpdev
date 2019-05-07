<?php 

require 'employee.php';

$servername = "localhost";
$username = "root";
$password = "SHX5RwamWFz7pB";
$employees = [];
/*
try 
{
    $conn = new PDO("mysql:host=$servername;dbname=MyDatabase", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $conn->query('SELECT EmployeeID, Name, Salary, Region FROM Employees');

	while ($row = $stmt->fetch())
	{
		$emp = new Employee;
		$emp->employeeID = $row['EmployeeID'];
		$emp->name = $row['Name'];
		$emp->salary = $row['Salary'];
		$emp->region = $row['Region'];
		$employees->array_push($emp);
	}
}
catch(PDOException $ex)
{
    echo "Connection failed: " . $ex->getMessage();
}
*/?>

<html>
<body>
	There are <?php echo count($employees) ?> employees.
</body>
</html>