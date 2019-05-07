<?php 

require 'employee.php';

$servername = "localhost";
$username = "root";
$password = "SHX5RwamWFz7pB";
$employees = [];

if (isset($_REQUEST["minSal"]))
{
	$minSal = $_REQUEST["minSal"];
}
else 
{
	$minSal = 0;
}

try 
{
    $conn = new PDO("mysql:host=$servername;dbname=MyDatabase", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $conn->prepare('SELECT EmployeeID, Name, Salary, Region FROM Employees WHERE Salary >= :minSal');
	$stmt->execute(['minSal' => $minSal]); 

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
	<h4><?php echo count($employees) . " employee(s) earn at least " . $minSal; ?> </h4>
	<ul>
		<?php foreach ($employees as $e) { ?>
			<li> <?php echo $e ?> </li>
		<?php } ?>
	</ul>
</body>
</html>