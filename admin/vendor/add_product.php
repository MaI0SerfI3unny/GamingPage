<?php
require '../../db/db.php';
$name_add = $_REQUEST['product_add'];
$author_add = $_REQUEST['author_add'];
$price_add = $_REQUEST['price_add'];
$mark_add = $_REQUEST['mark_add'];
$file_photo = $_REQUEST['file_photo'];
$description_add = $_REQUEST['description_add'];

$query_add_product = "INSERT INTO `games` (`id`, `name`, `author`, `price`, `mark`, `img`, `id_ca`, `id_popularity`, `id_banner`, `id_console`, `description`)
 VALUES (NULL, '$name_add', '$author_add', '$price_add', '$mark_add', '$file_photo', 1, 2, 2, 1, '$description_add')";
$get_add_product = $pdo->query($query_add_product);
$products = $get_add_product->fetchAll();

header('Location: ../products.php');
