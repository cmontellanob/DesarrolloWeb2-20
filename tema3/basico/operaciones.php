<?php 
function factorial ($n)
{
	if ($n==0)
		return 1;
	else
  		return factorial($n-1);
}

function fibonacci ($n)
{
	if ($n==0 or $n==1)
		return $n;
	else
  		return fibonacci($n-2)+fibonacci($n-1);
}

function piramide ($palabra)
{
	$l=strlen($palabra);
	$l%2==0?$palabra.="_":$palabra=$palabra; //in en lline A
	
	$l=strlen($palabra);
	$cantidad=1;
	$mitad=($l+1)/2;
	
	for ($i=0;$i<$mitad;$i++)
	{
		
		for ($j=0;$j<$mitad-$i-1;$j++)
		{
			echo "&nbsp;";
		}
		echo substr($palabra,$mitad-1-$i,$cantidad);
		echo "<br>";
		$cantidad+=2;
	}
		
	

	//echo $palabra;

}


 


?>

