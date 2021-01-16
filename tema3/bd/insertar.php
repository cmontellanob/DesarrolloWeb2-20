<?php session_start();
include("verificar.php");
include("verificarrol.php");

include ("conexion.php"); // conectarse
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$sexo=$_POST['sexo'];
$fechanacimiento=$_POST['fechanacimiento'];
$celular=$_POST['celular'];
$correo=$_POST['correo'];
$idprocedencia=$_POST['idprocedencia'];


$separado=explode(".",$_FILES['fotografia']['name']);
$extension=$separado[1];
$fotografia=$celular.".".$extension;


$sql="INSERT INTO personas (nombres,apellidos,sexo,fechanacimiento,celular,correo,idprocedencia,fotografia) values ('$nombres','$apellidos','$sexo','$fechanacimiento',$celular,'$correo',$idprocedencia,'$fotografia') "; //formar sql
//echo($sql);
copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);

if($resultado = mysqli_query ($con, $sql))
 echo "Se inserto con éxito"; //ejecutar elsql
  //ejecutar elsql

mysqli_close ($con); //cerrar
?>
<meta http-equiv="refresh" content="3;URL=listar.php">  