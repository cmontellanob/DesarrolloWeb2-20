<?php 
class Pagina
{
	public $encabezado;
	public $cuerpo;
	public $pie;
	function __construct($encabezado,$cuerpo,$pie)
	{
		$this->encabezado=$encabezado;
		$this->cuerpo=$cuerpo;
		$this->pie=$pie;

	}

	public function render()
	{
		echo $this->encabezado;
		echo $this->cuerpo;
		echo $this->pie;
			
	}

}
?>