<?php

include("conexion.php");
$f_autor=$_COOKIE['autor'];
//$resultados = mysqli_query($conn,'SELECT * FROM autor WHERE titulo='.$f_autor);


$query= 'SELECT * FROM libros WHERE autor="'.$f_autor.'"';
  $resultados= mysqli_query($conn,$query);

$suma=0;
$sumatotal=0;



// Listamos sólo la zona seleccionada
echo "<table border='2'>";
echo "<tr>";
echo "<th>Autor</th>";

echo "<th>Titulo</th>";

echo "<th>Precio</th>";

echo "<th>Genero</th>";	

echo "<th>Cantidad</th>";






echo "</tr>";
while($fila = mysqli_fetch_array($resultados)){
	echo "<tr>";
	echo "<td>";
	echo $fila['autor'];
	echo "</td>";

	echo "<td>";
	echo $fila['titulo'];
	echo "</td>";

	echo "<td>";
	echo $fila['precio'];
	echo "</td>";

	echo "<td>";
	echo $fila['genero'];
	echo "</td>";

	echo "<td>";
	echo $fila['cantidad'];
	echo "</td>";


	$suma=$fila['precio']*$fila['cantidad'];

$sumatotal=$sumatotal+$suma;
echo"<tr><td>Subtotal</td><td>"."$".$sumatotal."</td></tr>";


}
echo "</table>";
echo "<br>";
echo "<a href='index.php'><button type='button'>VOLVER</button></a>";
 $conn->close();
?>

