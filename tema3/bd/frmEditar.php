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
$sql="SELECT id,nombres,apellidos,sexo,fechanacimiento,celular,correo from personas where id=".$id; //formar sql
$resultado = mysqli_query ($con, $sql) ; //ejecutar elsql
$fila=$resultado->fetch_assoc(); ?>
<form action="editar.php" method="POST" >
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

	<input type="submit" value="editar">


	
</form>
<?php
mysqli_close ($con); //cerrar
?>

</body>
</html>