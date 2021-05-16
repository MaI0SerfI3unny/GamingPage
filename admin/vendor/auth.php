<?php
require '../../../db/db.php';
if (isset($_REQUEST['auth'])) {
  $login = $_REQUEST['login'];
  $password = $_REQUEST['password'];
  $query_auth = "SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password' ";
  $get_auth = $pdo->query($query_auth);
  $auth = $get_auth->fetchAll();
  if ($auth) {
    header('Location: ../main.php');
  }
  else {
    header('Location: ../incorrect.php');
  }
}
