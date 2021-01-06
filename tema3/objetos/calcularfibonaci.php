<?php
include('operaciones.php');
$n=$_GET['n'];
$o=new Operaciones();
echo "el fibonacci de $n es ".$o->fibonacci($n);

echo "el fibonacci de $n es ".Operaciones::fibonacci($n);


?>