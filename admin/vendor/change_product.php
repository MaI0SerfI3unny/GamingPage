<?php
require '../../db/db.php';


$new_id = $_REQUEST['id'];
$new_name = $_REQUEST['product_add_new'];
$new_author = $_REQUEST['author_add_new'];
$new_price = $_REQUEST['price_add_new'];
$new_mark = $_REQUEST['mark_add_new'];
$new_description = $_REQUEST['description_add_new'];

$query_change = "UPDATE `games` SET `name` = '$new_name', `author` = '$new_author', `price` = '$new_price', `mark` = '$new_mark', `description` = '$new_description' WHERE `games`.`id` = $new_id";
$get_change = $pdo->query($query_change);
$changes = $get_change->fetchAll();

header('Location: ../products.php');
