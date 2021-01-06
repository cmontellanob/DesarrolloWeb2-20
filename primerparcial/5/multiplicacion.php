<?php include("operaciones.php");
session_start();
echo $_SESSION['operacion']->multiplicacion();
?>
<meta http-equiv="refresh" content="3;URL=menu.html">  