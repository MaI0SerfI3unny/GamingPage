<?php
require '../../db/db.php';
if (isset($_REQUEST['new_data'])) {
  $new_login = $_REQUEST['new_login'];
  $new_password_data = $_REQUEST['new_password_data'];
  $query_new_admin = "UPDATE `admin` SET `login` = '$new_login', `password` = '$new_password_data' WHERE `admin`.`id` = 1";
  $get_new_admin = $pdo->query($query_new_admin);
  $new_admin = $get_new_admin->fetchAll();
  header('Location: ../settings.php');
}
