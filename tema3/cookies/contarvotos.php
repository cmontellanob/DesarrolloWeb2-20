<?php
if (isset($_COOKIE['voto']))
{
echo "usted ya voto ";

}
else
{
$voto=$_POST['voto'];
echo "usted voto por el candidato ".$voto;
setcookie('voto',1,0);

}

?>