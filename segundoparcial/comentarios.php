<?php include ("conexion.php"); // conectarse
$id=$_GET['id'];

$sql="SELECT id,titulo,texto,imagen from noticias where id=$id";

 //formar sqlis
$resultado = mysqli_query ($con, $sql) ; //ejecutar elsql
$fila=$resultado->fetch_assoc();
?>
<img src="images/<?php echo $fila['imagen'];?>" width="100px">   	

<p>Titulo: <?php echo $fila['titulo'] ?></p>
<p>Texto: <?php echo $fila['texto'] ?></p>

<h3 Insertar Comentario </h3>

<label for="comentario"> Comentario</label>
<textarea name="comentario" id="comentario" cols="30" rows="10"></textarea><br>
<button tyoe="button" onclick="comentar(<?php echo $id ?>)">Comentar</button>

<?php 
mysqli_close ($con); //cerrar

?>
