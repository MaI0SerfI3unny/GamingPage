<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <?php session_start();
  if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
    header('Location: main.php');

  }
  ?>
  <body style="background: url('./img/incorrect.jpg');background-size:100%;background-repeat:no-repeat">
  <div class="container text-center">
    <div class="justify-content-center mt-5 pt-5">
      <h1 class="mt-5 pt-5 text-uppercase text-white">Пароль неверный</h1>
      <button type="button" name="button"><a href='index.php'>Вернуться</a></button>
    </div>
  </div>
  </body>
</html>
