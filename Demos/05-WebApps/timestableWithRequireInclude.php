<html>
<head>
<title>Times table</title>
<style>
	.cell {
		text-align: right;
		width: 30px;
	}	
	.panel {
		color: white;
		background-color: #428cf4;
	}
</style>	
</head>
<body>

<h1>Times table</h1>

<?php require "setMinMax.php" ?>
<?php include "includes/header.php" ?>

<table>
	<?php for ($r = $min; $r <= $max; $r++) { ?>	
	<tr>
		<?php for ($c = 1; $c <= 12; $c++) { ?>	
			<td class="cell"> <?php echo $r * $c ?> </td>
		<?php } ?>
	</tr>
	<?php } ?>
</table>

<?php include "includes/footer.php" ?>
	
</body>
</html> 