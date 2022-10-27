<?php
session_start();
$_SESSION['usuario'] = $_REQUEST['usu'];
$_SESSION['clave'] = $_REQUEST['clav'];
?>
<html>

<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 5</title>
</head>

<body>
  Se almacenaron dos variables de sesión.<br><br>
  <a href="ej5.2.php">Ir a la tercer página donde se recuperarán
    las variables de sesión</a>
</body>

</html>