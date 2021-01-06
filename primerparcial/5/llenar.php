<?php session_start();
include("operaciones.php");
$a=$_POST['a'];
$b=$_POST['b'];
$_SESSION['operacion']=new Operaciones($a,$b);

?>
<meta http-equiv="refresh" content="3;URL=menu.html">  