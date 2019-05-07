<?php
class Employee
{
	public $employeeID;
	public $name;
	public $salary;
	public $region;
	
	public function __toString() 
	{
		return "[" . $this->employeeID . "], " . $this->name . ", salary £" . $this->salary . ", region " . $this->region;
    }
}
?>