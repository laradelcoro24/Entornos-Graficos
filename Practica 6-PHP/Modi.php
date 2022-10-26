<head>
<title>Modificacion</title>
</head>
<body>
<?php
include ("conexion.inc");
//Captura datos desde el Form anterior
$vID = $_POST['id'];
$vNombre = $_POST['nombre'];
$vPais = $_POST['pais'];
$vHabitantes = $_POST['habitantes'];
$vSuperficie = $_POST['superficie'];
$vMetro= $_POST['metro'];
//Arma la instrucción SQL y luego la ejecuta
    $vSql = "UPDATE cuid set id='$vID', nombre='$vNombre', pais='$vPais', habitantes='$vHabitantes', superficie='$vSuperficie',
    metro='$vMetro' where  id='$vID'";
mysqli_query($link,$vSql) or die (mysqli_error($link));
echo("La cuidad fue Modificado<br>");
echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>