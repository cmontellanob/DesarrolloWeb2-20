<?php
include ("conexion.php"); // conectarse
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$sexo=$_POST['sexo'];
$fechanacimiento=$_POST['fechanacimiento'];
$celular=$_POST['celular'];
$correo=$_POST['correo'];
$id=$_POST['id'];
$idprocedencia=$_POST['idprocedencia'];
echo $_FILES['fotografia']['name'];
if ($_FILES['fotografia']['name']!='')
{
echo "entro";	
$separado=explode(".",$_FILES['fotografia']['name']);
$extension=$separado[1];
$fotografia=$celular.".".$extension;
$sql="UPDATE personas SET nombres='$nombres',apellidos='$apellidos',sexo='$sexo',fechanacimiento='$fechanacimiento',celular=$celular,correo='$correo',idprocedencia='$idprocedencia',fotografia='$fotografia' WHERE id=".$id; //formar sql
copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);

}
else
{
$sql="UPDATE personas SET nombres='$nombres',apellidos='$apellidos',sexo='$sexo',fechanacimiento='$fechanacimiento',celular=$celular,correo='$correo',idprocedencia='$idprocedencia' WHERE id=".$id; //formar sql
}


//echo($sql);
if($resultado = mysqli_query ($con, $sql)) //ejecutar elsql
 echo "se actualizó con éxito" ; 

mysqli_close ($con); //cerrar
?>
<meta http-equiv="refresh" content="3;URL=listar.php">  
 
