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
          <h1 class="text-uppercase pt-5">Products</h1>
          <a href='new.php'><button type="button" name="button">Добавить продукт</button></a>
            <table>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Author</th>
                <th>Price</th>
                <th>Mark</th>
                <th>Description</th>
              </tr>
              <?php foreach ($games as $game): ?>
                <tr>
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
                  <th><button type="button" name="button"><a href="vendor/delete.php?id=<?php echo $game['id']; ?>">Удалить</button></th>
                  <th><button type="button" name="button"><a href="change.php?id=<?php echo $game['id']; ?>">Изменить</a></button></th>
                </tr>
              <?php endforeach; ?>
            </table>
          </table>


        </div>
      </div>
    </div>
  </body>
</html>
