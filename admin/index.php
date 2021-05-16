<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <?php require '../db/db.php' ?>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php session_start();
    if (isset($_SESSION['login']) && isset($_SESSION['password'])){header('Location: main.php');}?>
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <h3 class="text-white ml-4"><img class="mr-3" style="width:40px" src="img/logo.png" alt="">Finn-Panel</h3>
      </div>
    </header>
<main>
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-6 p-0">
      <img style="min-height:969px" class="img-fluid" src="img/animation.gif" alt="animation">
    </div>
    <div  class="col-md-6 text-center pt-5">
      <h2 style="margin-top:200px" class=" pt-5 text-uppercase">Вход в административную панель</h2>
      <form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
        <input class="mt-3" type="text" name="login" value="">
        <br>
        <input class="mt-3" type="password" name="password" value="">
        <br>
        <input class="mt-5 btn-success" type="submit" name="auth" value="Login">
      </form>
  <?php if (isset($_REQUEST['auth'])) {
    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];
    $query_auth = "SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password' ";
    $get_auth = $pdo->query($query_auth);
    $auth = $get_auth->fetchAll();
    if ($auth) {
      $_SESSION['login'] = $login;
      $_SESSION['password'] = $password;

      header('Location: main.php');
    }
    else {

      header('Location: incorrect.php');
    }
  } ?>
    </div>
  </div>
  </div>
</main>
  </body>
</html>
