<?php
$link = mysqli_connect("127.0.0.1", "root") or die ("Problemas de conexión a la 
datos");
mysqli_select_db($link, "capitales");
?>