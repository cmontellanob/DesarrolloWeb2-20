<?php 
include ("conexion.php"); // conectarse
$idnoticia=$_POST['idnoticia'];
$comentario=$_POST['comentario'];

$sql="INSERT INTO comentarios (idnoticia,comentario) values ($idnoticia,'$comentario') "; //formar sql

if($resultado = mysqli_query ($con, $sql))
{echo "Se inserto con éxito"; }  //ejecutar elsql
  //ejecutar elsql

mysqli_close ($con); //cerrar
?>
