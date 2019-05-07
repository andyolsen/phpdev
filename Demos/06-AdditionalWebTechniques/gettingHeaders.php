<html>
<head>
<title>Demo getting HTTP headers</title>
</head>
<body>

<h1>Demo getting HTTP headers</h1>

<ul>
	<?php 
	foreach (getallheaders() as $name => $value) 
	{
		echo "<li> $name: $value </li>";
	}
	?>
</ul>

</body>
</html> 