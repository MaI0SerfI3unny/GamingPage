<?php
require '../db/db.php';

$id = @$_POST['id'];
$comment = @$_POST['comment'];
if(strlen($id) > 0 && strlen($comment) > 0){
  $query_add = "INSERT INTO `comments` (`id`, `id_game`, `name_comment`) VALUES (NULL, '$id', '$comment')";
  $get_add = $pdo->query($query_add);
  $add = $get_add->fetchAll();
  echo "Коммент добавлен";
}

header('Location: ../single.php?name='.$id);
