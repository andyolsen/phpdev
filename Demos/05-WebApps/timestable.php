<html>
<head>
<title>Times table</title>
<style>
	.cell {
		text-align: right;
		width: 30px;
	}
</style>	
</head>
<body>

<h1>Times table</h1>

<table>
	<?php for ($r = 1; $r <= 12; $r++) { ?>	
	<tr>
		<?php for ($c = 1; $c <= 12; $c++) { ?>	
			<td class="cell"> <?php echo $r * $c ?> </td>
		<?php } ?>
	</tr>
	<?php } ?>
</table>
	
</body>
</html> 