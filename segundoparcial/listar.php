<?php include ("conexion.php"); // conectarse
$sql="SELECT id,titulo,texto,imagen from noticias";

 //formar sqlis
$resultado = mysqli_query ($con, $sql) ; //ejecutar elsql
?>

<table border="1">
	<tr>
	<th>Fotografia</th>
	<th>Titulo </th>
	<th>Resumen</th>
	<th>Operacion</th>
	</tr>
	<tbody>
		<?php
	while ($fila=$resultado->fetch_assoc())
		{
			?>
			<tr>
			<td><img src="images/<?php echo $fila['imagen'];?>" width="100px">   </td>
				<td><?php echo $fila['titulo'];?> </td>
				<td><?php echo substr($fila['texto'],1,100);?> </td>
				<td> <a href="javascript:ver(<?php echo $fila['id']?>)">Ver</a>
				 <a href="javascript:comentarios(<?php echo $fila['id']?>)">Comentar</a></td>
			</tr>
		<?php 
		} ?>	
	</tbody>
</table>

<?php 
mysqli_close ($con); //cerrar

?>
