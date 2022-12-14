<?php

if (!empty($_POST['periódico'])) {
  $news = $_POST['periódico'];
  setcookie('news', $news);
  header('Location: ej4.php');
} else {
  if (!empty($_COOKIE['news'])) {
    $show = $_COOKIE['news'];
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Periodico</title>
</head>

<style>
body {
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background: #d6d6d6;
  box-sizing: border-box;
}

form {
  padding: 3rem;
  background-color: #fff;
  border-radius: 1px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.submit {
  margin: 10px 0;

}

.choice {
  background-color: #fff;
  padding: 1rem;
  margin: 1rem 0;
}
</style>

<body>
  <?php if (empty($show)) { ?>
  <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
    <label for="Politica">
      Noticia política <input type="radio" name="periódico" value="Politica" id="politica">
    </label>
    <label for="economica">
      Noticia económica <input type="radio" name="periódico" value="Economica" id="economica">
    </label>
    <label for="deportiva">
      Noticia deportiva <input type="radio" value="Deportiva" id="deportiva" name="periódico">
    </label>

    <div class="submit">
      <button name="submit" type="submit" class="">Seleccionar</button>
    </div>


  </form>
  <?php } else {

    echo "<span class='choice'>$show</span>";
    echo '<a href="vacio.php">Borrar</a>';
  } ?>
</body>

</html>