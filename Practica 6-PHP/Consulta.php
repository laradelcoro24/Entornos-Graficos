<html>
<head>
<title> Listados completo </title>
</head>
<body>
<?php 
include("conexion.inc");
$vSql = "SELECT * FROM cuid";
$vResultado = mysqli_query($link, $vSql);
$total_registros=mysqli_num_rows($vResultado);
?>
<table border=1>
<tr>
td><b>ID</b></td>
<td><b>Nombre</b></td>
<td><b>Pais</b></td>
</tr>
<?php
while ($fila = mysqli_fetch_array($vResultado)) 
{
?>
<tr>
 <td><?php echo ($fila['id']); ?></td>
 <td><?php echo ($fila['nombre']); ?></td>
 <td><?php echo ($fila['pais']); ?></td>
</tr> 
<tr>
 <td colspan="5">
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>
 </td>
</tr>
</table>
<p>&nbsp;</p>
<p align="center"><a href="Menu.html">Volver al menu</a></p>
</body>
</html>