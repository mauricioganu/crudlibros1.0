<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Entre y salga despacio S.A</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/floating-labels.css" rel="stylesheet">

  </head>
  <style>
   
    th 
    {
      color:green;
      background-color: orange;
    }
    td {color:black;}
    table,th,td 
    {
     border: 10px solid black;
    text-align: center;
    }

    </style>  
    <body>

    <header>
    	<?php
        include "componentes/menu.php";
    ?>
    </header>

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
	 <main role="main" class="container">
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
</main>
      
     <footer class="footer">
    <?php
        include "componentes/pie.php";
    ?>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" cAlumnorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
	
 </Body>
 </HTML>
