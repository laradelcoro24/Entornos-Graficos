<?php
if (!empty($_POST['nombre'])) {
  $name = $_POST['nombre'];
  setcookie('nombre', $name);
  header('Location: index.php');
} else {
  if (!empty($_COOKIE['nombre'])) {
    var_dump($_COOKIE['nombre']);
    $oldname = $_COOKIE['nombre'];
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COOKIE</title>
</head>

<body>
  <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
    <div style="margin: 10px 0px;">
      <label for="nombre">Name</label>
      <input value="<?= isset($oldname) ? $oldname : '' ?>" id="name" name="name" type="text"
        placeholder="escribe su nombre:">
    </div>
    <div class="submit">
      <button name="submit" type="submit" class="">Crear Cookie</button>
    </div>
  </form>
</body>

</html>