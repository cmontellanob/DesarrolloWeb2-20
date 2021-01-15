<?php
include ("conexion.php"); // conectarse
$sql="SELECT personas.id,nombres,apellidos,sexo,fechanacimiento,celular,correo,procedencia,fotografia from personas
left join procedencia on personas.idprocedencia=procedencia.id";
 //formar sql
$resultado = mysqli_query ($con, $sql) ; //ejecutar elsql
?>
<table border="1">
	<tr>
	<th>Fotografia</th>
	<th>Nombres</th>
	<th>Apelldios</th>
	<th>Sexo</th>
	<th>Fecha Nacimiento</th>
	<th>Celular</th>
	<th>Correo</th>
	<th>Procedencia</th>
	<th>Operaciones</th>
	</tr>
	<tbody>
		<?php
	while ($fila=$resultado->fetch_assoc())
		{
			?>
			<tr>
			<td><img src="images/<?php echo $fila['fotografia'];?>" width="100px">   </td>
				<td><?php echo $fila['nombres'];?> </td>
				<td><?php echo $fila['apellidos'];?> </td>
				<td><?php echo $fila['sexo'];?> </td>
				<td><?php echo $fila['fechanacimiento'];?> </td>
				<td><?php echo $fila['celular'];?> </td>
				<td><?php echo $fila['correo'];?> </td>
				<td><?php echo $fila['procedencia'];?> </td>
				
				<td><a href="frmEditar.php?id=<?php echo $fila['id'];?>">Editar</a>
				<a href="eliminar.php?id=<?php echo $fila['id'];?>">Eliminar</a> 
				 </td>
			</tr>
		<?php 
		} ?>	
	</tbody>
</table>
<a href="frmInsertar.php">Insertar</a>
<?php 
mysqli_close ($con); //cerrar
?>
