<?php
include ("conexion.php"); // conectarse
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$sexo=$_POST['sexo'];
$fechanacimiento=$_POST['fechanacimiento'];
$celular=$_POST['celular'];
$correo=$_POST['correo'];
$id=$_POST['id'];

$sql="UPDATE personas SET nombres='$nombres',apellidos='$apellidos',sexo='$sexo',fechanacimiento='$fechanacimiento',celular=$celular,correo='$correo' WHERE id=".$id; //formar sql
//echo($sql);
if($resultado = mysqli_query ($con, $sql)) //ejecutar elsql
 echo "seactualizó con éxito" ; 

mysqli_close ($con); //cerrar
?>
<meta http-equiv="refresh" content="3;URL=listar.php">  