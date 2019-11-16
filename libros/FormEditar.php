
<?php
include("conexion.php");

if($_GET) {
    $f_titulo = $_GET['titulo'];
// Como no puedo cambiar ID, lo paso como cookie  
  setcookie("titulo", $f_titulo);
  $query= 'SELECT * FROM libros WHERE titulo="'.$f_titulo.'"';
  $resultados= mysqli_query($conn,$query);
 // $resultados=mysqli_query($conn,"SELECT * FROM libros ");

  $fila = mysqli_fetch_array($resultados);
  //var_dump($fila);
  $conn->close();
}
?>
<!-- Formulario para modificar los datos -->
<HTML>
<Body>
<form action="Edito.php"  metod="get">
<p name="titulo">Titulo:<?php echo $f_titulo; ?></p>
<br>


<p>Autor: <input type="text" name="autor" value=<?php echo $fila['autor']; ?> > </p>
<br>


<p>Precio: <input type="text" name="precio" value=<?php echo $fila['precio']; ?> > </p>
<br>

<p>Genero: <input type="text" name="genero" value=<?php echo $fila['genero']; ?> > </p>
<br>

<p>Cantidad: <input type="text" name="cantidad" value=<?php echo $fila['cantidad']; ?> > </p>
<br>
 <input type="submit" value="Modificar">
</form> 
 </Body>
 </HTML>
