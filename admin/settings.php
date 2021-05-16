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
    <?php require 'component/header.php' ?>
    <div class="container-fluid ">
      <div class="row">
  <?php require 'component/sidebar.php' ?>
        <div class="col-md-10 jumbotron">
          <h1 class="mt-5">Настройки</h1>
          <p class="mb-4">Безопасность:</p>
          <form class="" action="vendor/new_data.php" method="post">
            <p>Логин</p>
            <input type="text" name="new_login" value="<?php echo $admin[0]['login'] ?>">
            <p>Пароль</p>
            <input type="text" name="new_password_data" value="<?php echo $admin[0]['password'] ?>">
            <br>
            <br>
            <input type="submit" name="new_data" value="Сменить данные">
          </form>
          <br><br>
          <h3 class="mb-4 mt-3">Настройки сайта:</h3>
          <form class="" action="vendor/add_seo.php" method="post">
            <p>Заголовок сайта</p>
            <input type="text" name="name_seo" value="<?php echo $settings[0]['name'] ?>">
            <p>Описание сайта</p>
            <textarea name="description_seo" rows="8" cols="80"><?php echo $settings[0]['description']; ?></textarea>
            <p>Ключевые слова сайта (SEO)</p>
            <textarea name="keywords_seo" rows="8" cols="80"><?php echo $settings[0]['keywords']; ?></textarea>
            <br>
            <br>
            <input type="submit" name="new_seo" value="Сменить данные">
          </form>
          <br><br>
          <p>Тип базы данных: <b><?php echo $type ?></b></p>
          <p>Хост: <b><?php echo $host ?></b></p>
          <p>Название базы данных: <b><?php echo $db ?></b></p>
        </div>
      </div>
    </div>
  </body>
</html>
