<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar</title>
</head>
<body>
<?php $id=$_GET['id'];
include ("conexion.php"); // conectarse
$sql="SELECT id,nombres,apellidos,sexo,fechanacimiento,celular,correo,idprocedencia,fotografia from personas where id=".$id; //formar sql
$resultado = mysqli_query ($con, $sql) ; //ejecutar elsql
$fila=$resultado->fetch_assoc();

$sql2="SELECT id,procedencia from procedencia";

$resultado = mysqli_query ($con, $sql) ; //ejecutar elsql
$fila=$resultado->fetch_assoc();
$procedencias = mysqli_query ($con, $sql2) ; //ejecutar elsql


 ?>
<img src="images/<?php echo $fila['fotografia']; ?>" width="100px"><br>
<form action="editar.php" method="POST" enctype="multipart/form-data"  >
	<label for="fotograria">Fotografia:</label>
	<input type="file" name="fotografia"> <br>
	<label for="nombres">Nombres:</label>
	<input type="text" name="nombres" value="<?php echo $fila['nombres'];?>"> <br>
	<label for="apellidos" >Apellidos:</label>
	<input type="text" name="apellidos" value="<?php echo $fila['apellidos'];?>"> <br>
	<label for="sexo">Sexo:</label>
	<input type="radio" name="sexo" <?php echo $fila['sexo']=='F'?"checked":""?> value="F">Femenino
	<input type="radio" name="sexo" <?php echo $fila['sexo']=='M'?"checked":""?> value="M">Masculino <br>
	<label for="fechanacimiento">Fecha de Nacimiento:</label>
	<input type="date" name="fechanacimiento" value="<?php echo $fila['fechanacimiento'];?>"> <br>
	<label for="celular">Celular:</label>
	<input type="number" name="celular" value="<?php echo $fila['celular'];?>"> <br>
	<label for="correo">Correo Electrónico:</label>
	<input type="email" name="correo" value="<?php echo $fila['correo'];?>"> <br>
	<input type="hidden" name="id" value="<?php echo $id;?>"> <br>
	<label for="idprocedencia">Procedencia:</label>
	<select name="idprocedencia" >
		<?php
	while ($filaprocedencias=$procedencias->fetch_assoc())
		{
			?>
		<option value="<?php echo $filaprocedencias['id']?>" 
			<?php echo $filaprocedencias['id']==$fila['idprocedencia']?"selected":""; ?>
		
			><?php echo $filaprocedencias['procedencia']?>
		</option>	
		<?php }?>

	</select>

	<input type="submit" value="editar">


	
</form>
<?php
mysqli_close ($con); //cerrar
?>

</body>
</html>