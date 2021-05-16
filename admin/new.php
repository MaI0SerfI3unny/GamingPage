<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php require '../db/db.php' ?>
  </head>
  <body>
    <?php session_start(); ?>

    <header>
      <div class="container-fluid">
        <h3 class="text-white ml-4 float-left"><img class="mr-3" style="width:40px" src="img/logo.png" alt="">Finn-Panel</h3>
        <a class="float-right mr-5" style='margin-top:0.7rem' href="vendor/logout.php">Выйти</a>
        <div class="float-right mr-5">
          <p class="float-right "><img style="width:50px" src="img/avatar.png" class="mr-3" alt=""><?php echo mb_strtoupper($_SESSION['login']) ?></p>
        </div>
      </div>
    </header>
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
            <h1 class="text-uppercase pt-5">Добавить продукт</h1>
            <form class="" action="vendor/add_product.php" method="post">
              <p>Название продукта</p>
              <input style="width:80%" type="text" name="product_add" value="">
              <p class="mt-2">Автор</p>
              <input style="width:80%" type="text" name="author_add" value="">
              <p class="mt-2">Цена</p>
              <input style="width:80%" type="text" name="price_add" value="">
              <p class="mt-2">Оценка</p>
              <input style="width:80%" type="text" name="mark_add" value="">
              <p class="mt-2">Фото</p>
              <input type="file" name="file_photo" value="">
              <p class="mt-2">Описание</p>
              <textarea name="description_add" rows="8" cols="80"></textarea>
              <br>
              <input type="submit" name="" value="Добавить продукт">
            </form>

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
