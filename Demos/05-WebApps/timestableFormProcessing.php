<?php
  $min = $_POST["min"];
  $max = $_POST["max"];
?>

<html>
<head>
<title>Times table with form parameters</title>
<style>
	.cell {
		text-align: right;
		width: 30px;
	}
</style>	
</head>
<body>

<h1>Times table with form parameters</h1>

<table>
    <?php for ($r = $min; $r <= $max; $r++) { ?>    
    <tr>
        <?php for ($c = 1; $c <= 12; $c++) { ?>    
            <td class="cell"> <?php echo $r * $c ?> </td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>
	
</body>
</html> 