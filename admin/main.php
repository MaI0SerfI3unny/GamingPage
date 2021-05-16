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
          <ul>
          <?php foreach ($games as $game): ?>
          <li><?php echo $game['name']; ?></li>
          <?php endforeach; ?>
        </ul>
        </div>
      </div>
    </div>
  </body>
</html>
