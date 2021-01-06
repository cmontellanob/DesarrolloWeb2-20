<?php 
class Operaciones {
	
function factorial ($n)
{
	if ($n==0)
		return 1;
	else
  		return $this->factorial($n-1);
}

function fibonacci($n)
{
	if ($n==0 or $n==1)
		return $n;
	else
  		return Operaciones::fibonacci($n-2)+Operaciones::fibonacci($n-1);
}
}
?>