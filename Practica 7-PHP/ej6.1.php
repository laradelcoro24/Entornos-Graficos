<?php
session_start();
$conexion = mysqli_connect("127.0.0.1", "root", "", "base2") or
  die("Problemas con la conexión");

$registros = mysqli_query($conexion, "select codigo, nombre, cursoCodigo
                        from alumnos where email='$_REQUEST[email]'") or
  die("Problemas en el select:" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {
  $_SESSION['usuario'] = $reg['nombre'];
}

?>
<html>

<head>
    
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 6</title>
</head>

<body>
  <a href="ej6.2.php">Ingresar a pagina principal</a>;
</body>

</html>