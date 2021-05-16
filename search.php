<?php require 'view/header.php'; ?>
<?php
$result_search = $_POST['search'];
$query_search = "SELECT * FROM `games` WHERE `name` = '$result_search'";
$get_search = $pdo->query($query_search);
$search = $get_search->fetchAll();
 ?>
  <main>
    <div class="list">
    <div class="container mt-5">
    <h1 class="text-white">Result: <?php echo $_POST['search']; ?></h1>
    <div class="row  mt-5">
      <?php
      foreach ($search as $searches) { ?>
        <div class="col-md-3 pb-3">
          <a href="single.php?name=<?php echo $searches['name']; ?>">
            <img style="height:285px" class="img-fluid" src="<?php echo $searches['img']; ?>" alt="">
            <div class=" info_game">
              <h5 class="float-left text-white mt-1"><?php echo $searches['name']; ?></h5>
              <br>
              <br>
              <p class="description"><?php echo $searches['author']; ?></p>
            </div>
            <div class="price  pb-1">
              <h5 class=" text-white"><?php echo $searches['price']; ?></h5>
              <?php if ($searches['id_console'] == 1) {
                echo "<img class='type' src='img/playstation.png'>";
              }elseif ($searches['id_console'] == 2) {
                echo "<img class='type' src='img/xbox.png'>";
              }elseif ($searches['id_console'] == 3) {
                echo "<img class='type' src='img/todos.png'>";
              }elseif ($searches['id_console'] == 4) {
                echo "<img class='type' src='img/pc.png'>";
              }
               ?>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
  </main>
</body>
</html>
