<?php
header("Content-Type: image/png");

if ($_GET['clave']==5)
{

$imagen = imagecreatefrompng("editar.png");
imagepng($imagen);
}
?>
