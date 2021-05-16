<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php require '../db/db.php' ?>
    <?php
    $id_change = $_GET['id'];
    $query = "SELECT * FROM `games` WHERE `id` = $id_change";
    $get_change = $pdo->query($query);
    $change = $get_change->fetchAll();
     ?>
  </head>
  <body>
    <?php require 'component/header.php' ?>
    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-2 p-0">
          <ul style="min-height:955px;" class="text-center">
            <li><a href='main.php'>Главная</a></li>
            <li><a href='products.php'>Продукты</a></li>
            <li><a href=''>Настройки</a></li>
            <li><a href=''>Баннер</a></li>
          </ul>
        </div>
        <div class="col-md-10 jumbotron">
          <div class="col-md-6">
            <h1 class="text-uppercase pt-5">Изменение продукта # <?php echo $id_change; ?></h1>
            <form class="" action="vendor/change_product.php" method="post">
              <input type="hidden" name="id" value="<?php echo $change[0]['id'] ?>">
              <p>Название продукта</p>
              <input style="width:80%" type="text" name="product_add_new" value="<?php echo $change[0]['name']; ?>">
              <p class="mt-2">Автор</p>
              <input style="width:80%" type="text" name="author_add_new" value="<?php echo $change[0]['author']; ?>">
              <p class="mt-2">Цена</p>
              <input style="width:80%" type="text" name="price_add_new" value="<?php echo $change[0]['price']; ?>">
              <p class="mt-2">Оценка</p>
              <input style="width:80%" type="text" name="mark_add_new" value="<?php echo $change[0]['mark']; ?>">
              <p class="mt-2">Фото</p>
              <input type="file" name="file_photo_new" value="">
              <p class="mt-2">Описание</p>
              <textarea name="description_add_new" rows="8" cols="80"><?php echo $change[0]['description']; ?></textarea>
              <br>
              <input type="submit" name="" value="Изменить продукт">
            </form>

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
