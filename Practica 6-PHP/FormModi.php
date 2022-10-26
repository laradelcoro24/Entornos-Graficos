<title>Modificacion</title>
</head>
<boby>
<?php
include ("conexion.inc");
//Captura datos desde el Form anterior
$vID= $_POST['id'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT * FROM cuid WHERE id ='$vID' ";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$fila = mysqli_fetch_array($vResultado);
if(mysqli_num_rows($vResultado) == 0) {
 echo ("Cuidad Inexistente...!!! <br>");
 echo ("<A href='FormModificacion.html'>Continuar</A>");
}
else{
?>
<FORM action="Modi.php" method="POST" name="FormModif">
<table width="356">
<tr> 
 <td width="103"> Nombre: </td>
 <td width="243"> <input type="text" name="Nombre" value="<?php 
echo($fila['nombre']); ?>">
 </td>
</tr>
<tr> 
 <td width="103"> ID: </td>
 <td width="243"> <input type="TEXT" name="Id" size="20" maxlength="20" 
 value="<?php echo($fila['id']); ?>">
 </td>
 </tr>
 <tr> 
 <td width="103"> Pais: </td>
 <td width="243"> <input type="TEXT" name="pais" size="20" maxlength="20" 
 value="<?php echo($fila['pais']); ?>">
 </td>
</tr>
<tr> 
 <td width="103"> habitantes: </td>
 <td width="243"> <input type="TEXT" name="hab" size="20" maxlength="40" 
 value="<?php echo($fila['habitantes']); ?>">
 </td>
</tr>
 <tr> 
 <td width="103"> Superficie: </td>
 <td width="243"> <input type="TEXT" name="sup" size="20" maxlength="40" 
 value="<?php echo($fila['superficie']); ?>">
 </td>
 </tr>
 <tr> 
 <td width="103"> Tiene metro: </td>
 <td width="243"> <input type="TEXT" name="metro" size="20" maxlength="40" 
 value="<?php echo($fila['metro']); ?>">
 </td>
 </tr>
 
 <tr> 
 <td colspan="2" align="center"> <input type="SUBMIT" name="Submit" 
value="Modificar"> 
 </td>
 </tr>
</table>
</FORM>
<?php
}

mysqli_free_result($vResultado);

mysqli_close($link);
?>