<?php
if (isset($_COOKIE['candidato1']))
{
	$votos_candidato1=$_COOKIE['candidato1'];
}
else
{
   $votos_candidato1=0;	
}
if (isset($_COOKIE['candidato2']))
{
	$votos_candidato2=$_COOKIE['candidato2'];
}
else
{
   $votos_candidato2=0;	
}

isset($_COOKIE['candidato3'])?$votos_candidato3=$_COOKIE['candidato3']:$votos_candidato3=0;
isset($_COOKIE['candidato4'])?$votos_candidato4=$_COOKIE['candidato4']:$votos_candidato4=0;


$votacion=$_POST['votacion'];

switch ($votacion) {
	case 'candidato1':
		$votos_candidato1++;
		break;
	case 'candidato2':
		$votos_candidato2++;
		break;
	case 'candidato3':
		$votos_candidato3++;
		break;
	case 'candidato4':
		$votos_candidato4++;
		break;
	
	default:
		# code...
		break;
}
?>
<h3>Resultados votación </h3>	
<ul>
	<li>Candidato 1:<span ><?php echo $votos_candidato1 ?> </span></li>
	<li>Candidato 2:<span ><?php echo $votos_candidato2 ?> </span></li>
	<li>Candidato 3:<span ><?php echo $votos_candidato3 ?> </span></li>
	<li>Candidato 4:<span ><?php echo $votos_candidato4 ?> </span></li>
</ul>
<?php
	setcookie('candidato1',$votos_candidato1,0);
	setcookie('candidato2',$votos_candidato2,0);
	setcookie('candidato3',$votos_candidato3,0);
	setcookie('candidato4',$votos_candidato4,0);
?>