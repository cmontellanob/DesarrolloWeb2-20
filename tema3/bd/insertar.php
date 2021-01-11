<?php
include ("conexion.php"); // conectarse
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$sexo=$_POST['sexo'];
$fechanacimiento=$_POST['fechanacimiento'];
$celular=$_POST['celular'];
$correo=$_POST['correo'];

$sql="INSERT INTO personas (nombres,apellidos,sexo,fechanacimiento,celular,correo) values ('$nombres','$apellidos','$sexo','$fechanacimiento',$celular,'$correo') "; //formar sql
//echo($sql);
if($resultado = mysqli_query ($con, $sql))
 echo "Se inserto con éxito"; //ejecutar elsql
  //ejecutar elsql

mysqli_close ($con); //cerrar
?>
<meta http-equiv="refresh" content="3;URL=listar.php">  