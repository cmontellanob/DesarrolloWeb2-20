<?php session_start();
if (isset($_GET['orden'])){
$orden=$_GET['orden'];
$tipo=$_GET['tipo'];

}
else 
{
	$orden='personas.id';
	$tipo='';
}

include("verificar.php");
include ("conexion.php"); // conectarse
$sql="SELECT personas.id,nombres,apellidos,sexo,fechanacimiento,celular,correo,procedencia,fotografia from personas
left join procedencia on personas.idprocedencia=procedencia.id order by ".$orden." ".$tipo;

 //formar sqlis
$resultado = mysqli_query ($con, $sql) ; //ejecutar elsql
?>
<a href="cerrarsesion.php">Cerrar Sessión</a>
<table border="1">
	<tr>
	<th>Fotografia</th>
	<th> <a href="listar.php?orden=nombres&tipo=<?php echo ($orden=='nombres' and $tipo=='')?'desc':'' ?>">Nombres</a></th>
	<th><a href="listar.php?orden=apellidos&tipo=<?php echo ($orden=='apellidos' and $tipo=='')?'desc':'' ?>">Apelldios</a></th>
	<th><a href="listar.php?orden=sexo&tipo=<?php echo ($orden=='sexo' and $tipo=='')?"desc":"" ?>">Sexo</a></th>
	<th><a href="listar.php?orden=fechanacimiento&tipo=<?php echo ($orden=='fechanacimiento' and $tipo=='')?"desc":"" ?>">Fecha Nacimiento</a></th>
	<th><a href="listar.php?orden=celular&tipo=<?php echo ($orden=='celular' and $tipo=='')?"desc":"" ?>">Celular</a></th>
	<th><a href="listar.php?orden=correo&tipo=<?php echo ($orden=='correo' and $tipo=='')?"desc":"" ?>">Correo</a></th>
	<th><a href="listar.php?orden=procedencia&tipo=<?php echo ($orden=='procedencia' and $tipo=='')?"desc":"" ?>">Procedencia</a></th>
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
				
				<td>
					<?php if ($_SESSION['nivel']==1)
					{ ?>
					<a href="frmEditar.php?id=<?php echo $fila['id'];?>">Editar</a>
				<a href="eliminar.php?id=<?php echo $fila['id'];?>">Eliminar</a>
					<?php }?> 
				 </td>
			</tr>
		<?php 
		} ?>	
	</tbody>
</table>
<?php if ($_SESSION['nivel']==1)
{ ?>
<a href="frmInsertar.php">Insertar</a>
<?php }?> 

<?php 
mysqli_close ($con); //cerrar

?>
