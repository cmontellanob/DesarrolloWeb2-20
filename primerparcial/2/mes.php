<?php
$n=$_GET['n'];

$meses= array('Enero' ,'Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiebre','Octubre','Noviembre','Diciembre' );
?>
<select>
<?php foreach ($meses as $indice=>$mes)
{

	?>
	<option 
	<?php if ($indice+1==$n)
			{
				echo 'selected="selected"';
			}?>	
	><?php echo $mes ?></option>
	<?php
}
?>
	
</select>