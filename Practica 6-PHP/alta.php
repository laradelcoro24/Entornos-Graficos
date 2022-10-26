<html>
<head>
<title>Alta Ciudad</title>
</head>
<body>
<?php 
include("conexion.inc");
//Captura datos desde el Form anterior
$vNombre = $_POST['nombre'];
$vID= $_POST['id'];
$vPais = $_POST['pais'];
$vHabitantes = $_POST['habitantes'];
$vSuperficie = $_POST['superficie'];
$vMetro = $_POST['metro'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT Count(id) as canti FROM cuid WHERE id='$vID'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$vCantCuidades = mysqli_fetch_assoc($vResultado);
//$vCantUsuarios = mysqli_result($vResultado, 0);
if ($vCantCuidades ['canti']!=0){
 echo ("La cuidad ya Existe<br>");
 echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
}
else {
$vSql = "INSERT INTO cuid (nombre, id, pais,habit,super,metro) 
values ('$vNombre','$vID', '$vPais', '$vHabitantes', '$vSuperficie', '$vMetro')";
 mysqli_query($link, $vSql) or die (mysqli_error($link));
 echo("La cuidad fue Registrada, Pronto recibirás un email, confirmandote la actualizaciòn a  nuestra pagina<br>");
echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
}
// Cerrar la conexion
mysqli_close($link); 
?>
</body>
</html>