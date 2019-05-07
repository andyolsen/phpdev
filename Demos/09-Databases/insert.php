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

	while ($row = $stmt->fetch())
	{
		$emp = new Employee;
		$emp->employeeID = $row['EmployeeID'];
		$emp->name = $row['Name'];
		$emp->salary = $row['Salary'];
		$emp->region = $row['Region'];
		array_push($employees, $emp);
	}
}
catch(PDOException $ex)
{
    echo "Connection failed: " . $ex->getMessage();
}
?>

<html>
<body>
	<h4><?php echo "After insert, there are " . count($employees) . " employee(s)" ?> </h4>
	<ul>
		<?php foreach ($employees as $e) { ?>
			<li> <?php echo $e ?> </li>
		<?php } ?>
	</ul>
</body>
</html>