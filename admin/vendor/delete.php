<?php
require '../../db/db.php';
$id_del = $_GET['id'];

$query_delete = "DELETE FROM `games` WHERE `games`.`id` = $id_del";
$get_del = $pdo->query($query_delete);
$delete = $get_del->fetchAll();

header('Location: ../products.php');
