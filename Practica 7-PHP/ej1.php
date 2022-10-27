<?php
//Veo si recibo datos del formulario 
if(isset($_POST["estilo"])){
//es que estoy recibiendo un estilo nuevo, lo tengo que meter en las cookies
$estilo = $_POST["estilo"];
//meto el estilo en una cookie
setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
}else{
if (isset($_COOKIE["estilo"])){
//es que tengo la cookie
$estilo = $_COOKIE["estilo"];
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <link rel="stylesheet" href="rosa.css">
    <link rel="stylesheet" href="verde.css">
<html>

<head>
<title>Cookies en PHP</title>
<?php

if (isset($estilo)){
echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo . '.css">';
}
?>
</head>
<body>
<p>
<form action="ej1.php" method="post"> Aquí 
puedes seleccionar el estilo que prefieres en la página:
<br>
<select name="estilo">
<option value="verde">Verde
<option value="rosa">Rosa

</select>
<input type="submit" value="Actualizar el estilo">
</form>
</body>
</html>