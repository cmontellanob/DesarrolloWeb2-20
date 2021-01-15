<?php 
include ("conexion.php"); // conectarse
$correo=$_POST['correo'];
$password=$_POST['password'];

$sql="SELECT correo,nivel from usuarios where correo='$correo' and password='".sha1($password)."'";
$resultado = mysqli_query ($con, $sql) ; //ejecutar elsql
if ($fila=$resultado->fetch_assoc())
{
	header("Location: listar.php");
}
else
{
	?>
	Datos incorrectos
	<meta http-equiv="refresh" content="3;URL=frmLogin.html">  

	<?php

}

