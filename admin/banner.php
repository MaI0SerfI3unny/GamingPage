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
        <div class="row">
          <div class="col-md-6">
            <h1 class="mt-4">Убрать из банера</h1>
            <table>
              <tr>
                <th></th>
                <th>ID</th>
                <th>Name</th>
                <th>Author</th>
                <th>Price</th>
                <th>Mark</th>
                <th>Description</th>
              </tr>
              <form class="" action="vendor/delete_banner.php" method="post">
              <?php foreach ($banner as $game): ?>
                <tr>
                  <th><input type='hidden' name="banner_id_delete[<?php echo $game['id']; ?>]" value="0"><input type='checkbox' name="banner_id_delete[<?php echo $game['id']; ?>]" value="1"></th>
                  <th><?php echo $game['id']; ?></th>
                  <th><?php echo $game['name']; ?></th>
                  <th><?php echo $game['author']; ?></th>
                  <th><?php echo $game['price']; ?></th>
                  <th><?php echo $game['mark']; ?></th>
                  <th><?php if (strlen($game['description']) >= 30) {
                    $string = substr($game['description'], 0, 100);
                    echo $string . '...';
                  }else {
                    echo $game['description'];
                  }?></th>
                </tr>
              <?php endforeach; ?>
              <input type="submit" name="delete_banner_button" value="Убрать из банера">
            </form>
            </table>
          </div>
          <div class="col-md-6">
            <h1 class="mt-4">Добавить в банер</h1>
            <table>
              <tr>
                <th></th>
                <th>ID</th>
                <th>Name</th>
                <th>Author</th>
                <th>Price</th>
                <th>Mark</th>
                <th>Description</th>
              </tr>
              <form class="" action="vendor/add_banner.php" method="post">
              <?php foreach ($non_banner as $game): ?>
                <tr>
                  <th><input type='hidden' name="banner_id_add[<?php echo $game['id']; ?>]" value="0"><input type='checkbox' name="banner_id_add[<?php echo $game['id']; ?>]" value="1"></th>
                  <th><?php echo $game['id']; ?></th>
                  <th><?php echo $game['name']; ?></th>
                  <th><?php echo $game['author']; ?></th>
                  <th><?php echo $game['price']; ?></th>
                  <th><?php echo $game['mark']; ?></th>
                  <th><?php if (strlen($game['description']) >= 30) {
                    $string = substr($game['description'], 0, 100);
                    echo $string . '...';
                  }else {
                    echo $game['description'];
                  }?></th>
                </tr>
              <?php endforeach; ?>
              <input type="submit" name="add_banner_button" value="Добавить в банер">
            </form>
            </table>
          </div>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
