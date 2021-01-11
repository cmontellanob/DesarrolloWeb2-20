<?php
include ("conexion.php"); // conectarse
$id=$_GET['id'];

$sql="DELETE from  personas WHERE id=".$id; //formar sql
//echo($sql);
if($resultado = mysqli_query ($con, $sql))
 echo "Se elimino con éxito"; //ejecutar elsql

mysqli_close ($con); //cerrar
?>
<meta http-equiv="refresh" content="3;URL=listar.php">  