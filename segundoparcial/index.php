<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio </title>
	<link rel="stylesheet" href="estilos.css">

</head>
<body>
	<div id="contenedor">
		<div id="cabeza"> 
			<div id="cabeza-izq"><img src="images/usfx.png" alt=""></div>
			<div id="cabeza-cnt">
				<span class="rojo">UNIVERSIDAD DE SAN FRANCISCO XAVIER	</span><br>
				<span class="celeste">Facultad de Tecnología</span>
				<span class="rojo">Sucr</span> 
				<span class="amarillo">e-Bol</span>
				<span class="verde">ivia</span>	
				<br> Carrera Ing de Sistemas - Ing. en Ciencias de laComputación <br>
				Semestre 2-20120 <br>	
				Alumno: Carlos Montellano<span class="celeste-bg"></span> CU: 35-239 <span class="celeste-bg"></span>
			</div>
			<div id="cabeza-der">
				<img src="images/tecnologia.png" alt="">
			</div>

		</div>
		<div id="contenido">
		<br><br><br><br><br>	


		</div>
	</div>
	<div id="derecha">
		<ul class="menu">
			<li><a href="frmLogin.html" >Pregunta 1</a></li>
			<li><a href="javascript:mostrarPagina('menor.html')"> Pregunta 2</a></li>
			<li><a href="javascript:mostrarPagina('suma.html')"" >Pregunta 3</a></li>
			<li><a href="javascript:mostrarPagina('listar.php')"" >Pregunta 4</a></li>
			
		</ul>

	</div>
	<div id="resultado"> resultado </div>

	<div id="pie"> Todos los Derechos Reservados </div>

<script src="examen.js"></script>
</body>
</html>