<?php
    // Get "previousVisit" cookie, if available.
	$prevVisit = "None";
	if (isset($_COOKIE["previousVisit"]))
	{
		$prevVisit = $_COOKIE["previousVisit"];
	}    
	
	// Get current date/time, and store in "previousVisit" cookie (10 secs lifetime).
	$now = date("D j F Y, H:i:s");
	setcookie("previousVisit", $now, time() + 10);
?>

<html>
<head>
<title>Demo cookies</title>
</head>
<body>

<h1>Demo cookies</h1>

<p>Previous visit: <?php echo $prevVisit ?></p>
<p>Time now: <?php echo $now ?></p>
<p>Click <a href="cookies.php">here</a> to reload page</p>

</body>
</html> 