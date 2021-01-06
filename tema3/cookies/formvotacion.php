<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema Votación</title>
</head>
<body>
	
	<form  action="contarvotos.php" method="POST">	
		Partido 1 <input type="radio" name="voto" value="parido1|"><br>
		Partido 2 <input type="radio" name="voto" value="partido2"><br>
		Partido 3 <input type="radio" name="voto" value="partido3"><br>
		<input type="submit" name="votar">
	</form>





</body>
</html>