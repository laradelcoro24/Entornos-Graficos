<html>
<head>
<title>Baja</title>
</head>
<body>
<?php
include ("conexion.inc");
$vID = $_POST ['id'];
$vSql = "SELECT * FROM cuid WHERE id='$vID' ";
$vResultado = mysqli_query($link, $vSql);
if(mysqli_num_rows($vResultado) == 0) 
 { 
 echo ("Cuidad Inexistente...!!! <br>");
 echo ("<A href='FormBaja.html'>Continuar</A>");
}
else{
//Arma la instrucción SQL y luego la ejecuta
$vSql= "DELETE FROM cuid WHERE id = '$vID' ";
mysqli_query($link, $vSql);
 echo("La cuidad fue Borrado<br>");
 echo("<A href='Menu.html'>Volver al Menu del ABM</A>");
}

mysqli_free_result($vResultado);

mysqli_close($link);
?>
</body>
</html>