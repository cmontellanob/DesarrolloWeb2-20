<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="etilos.css">
</head>
<body>
<?php 
$filas=$_POST['filas'];
$columnas=$_POST['columnas'];
?>
<table class="tabla">
	<?php for ($i=0;$i<=$filas-1;$i++)
	{?>
		<tr class="tabla">
			<?php for ($j=0;$j<=$columnas-1;$j++)
				{?> <td> 
					 <?php if ($j%2==0)	
					 	echo "VIVA";
					 	else 
					 	echo "CUNA";		

					 ?>
					</td>
				<?php 
				}
				?>	
		</tr>

	<?php } ?>

</table>
</body>
</html>
