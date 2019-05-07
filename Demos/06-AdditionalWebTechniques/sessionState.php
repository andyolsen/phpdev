<?php
	// Start session.
	session_start();

    // Make sure session state has an "items" session variable.
	if (!isset($_SESSION["items"]))
	{
		$_SESSION["items"] = [];
	}
  
	// See which button the user clicked (if any).
	if (isset($_POST["Add"]))
	{
        $name  = $_POST["name"];      // Get the "name" entered by the user. 
        $value = $_POST["value"];     // Get the "value" entered by the user.
		$_SESSION["items"][$name] = $value;
	}
	elseif (isset($_POST["Clear"]))
	{
		unset($_SESSION["items"]);
	}
?>

<html>
<head>
<title>Demo session state</title>
    <style>
        label {
            display: inline-block;
            width: 5em;
        }
		.formrow {
		    margin-bottom: 1em;
		}
    </style>
</head>
<body>

<h1>Demo session state</h1>

<form action="sessionState.php" method="post">

	<div class="formrow">
		<label>Name:</label>
		<input type="text" name="name">
	</div>
  
	<div class="formrow">
		<label>Value:</label>
		<input type="text" name="value">
	</div>      
  
	<div class="formrow">   
		<input type="submit" name="Add" value="Add to session">
		<input type="submit" name="Clear" value="Clear session">
	</div>
  
</form>
	
<?php if (isset($_SESSION["items"]) && count($_SESSION["items"]) != 0) { ?>
    <h4>Items</h4>
	<ul>
	<?php foreach ($_SESSION["items"] as $n=>$v) { ?>
		<li> 
			<?php echo "$n = $v" ?> 
		</li>
	<?php } ?>
	</ul>
<?php } ?>
</body>
</html> 