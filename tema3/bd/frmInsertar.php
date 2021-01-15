<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insertar</title>
</head>
<body>
<?php 
include("conexion.php"); 
$sql="SELECT id,procedencia from procedencia ";
$resultado = mysqli_query ($con, $sql) ; 
?>

	
<form action="insertar.php" method="POST" enctype="multipart/form-data" >
	<label for="fotograria">Fotografia:</label>
	<input type="file" name="fotografia"> <br>
	
	<label for="nombres">Nombres:</label>
	<input type="text" name="nombres"> <br>
	<label for="apellidos">Apellidos:</label>
	<input type="text" name="apellidos"> <br>
	<label for="sexo">Sexo:</label>
	<input type="radio" name="sexo" value="F">Femenino<input type="radio" name="sexo" value="M">Masculino <br>
	<label for="fechanacimiento">Fecha de Nacimiento:</label>
	<input type="date" name="fechanacimiento"> <br>
	<label for="celular">Celular:</label>
	<input type="number" name="celular"> <br>
	<label for="correo">Correo Electrónico:</label>
	<input type="email" name="correo"> <br>

		<label for="idprocedencia">Procedencia:</label>
	<select name="idprocedencia" >
		<?php
	while ($fila=$resultado->fetch_assoc())
		{
			?>
		<option value="<?php echo $fila['id']?>"><?php echo $fila['procedencia']?></option>	
		<?php }?>

	</select>
	
	<input type="submit" value="insertar">


	
</form>

</body>
</html>