<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php 
$viva=array("VIVA","MI","SUCRE");
$cuna=array("CUNA","DE","LIBERTAD");

$filas=$_POST['filas'];
$columnas=$_POST['columnas'];
?>
<div class="fondo">
<table class="tabla" >
4	<?php for ($i=0;$i<=$filas-1;$i++)
	{?>
		<tr>
			<?php for ($j=0;$j<=$columnas-1;$j++)
				{   if ($j%2==0)
					    {
					      echo $i%2==0?'<td class="rojo">':'<td class="blanco" >';	
					      echo $viva[$i % 3];
					      echo '</td>';
					 	}
					 	else 
					 	{echo $i%2==1?'<td class="rojo">':'<td class="blanco">';	
					      echo $cuna[$i % 3];
					      echo '</td>';		
					 	}	
				}
				?>	
		</tr>

	<?php } ?>

</table>
</div>
</body>
</html>
