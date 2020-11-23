<?php
$datos = ([ 'nombre'=>'Carlos',
			'apellido'=>'Montellano',
			'edad'=>45,
			"alumnos"=>array('alejandra','arie','efrain')

		]);
						
$datos["direccion"]="Alto tujsupaya";


foreach ($datos as $indice => $elem) { 
	if (is_array($elem))
	{
		   echo "alumnos :|";
			foreach ($elem as $alumno)
			{
				echo $alumno." ,";
			}
			echo "<br>";
	} 
	else
	{
	echo $indice,": ",$elem,'<br>';
	} 


}
?>