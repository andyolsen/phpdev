<?php
$now = time();
$twoHoursFromNow = $now + 2 * 60 * 60;
$expiryTime = gmdate('D, d M Y H:i:s \G\M\T', $twoHoursFromNow);
header('Expires: ' . $expiryTime); 
?>
<html>
<head>
<title>Demo setting HTTP headers</title>
</head>
<body>

<h1>Demo setting HTTP headers</h1>

<p>
	This page will expire at <?php echo $expiryTime ?>
</p>

</body>
</html> 