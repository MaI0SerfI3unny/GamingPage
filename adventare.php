
  <?php require 'view/header.php'; ?>
    <main>
      <div class="list">
      <div class="container mt-5">
      <h1 class="text-white">Adventure</h1>
      <div class="row  mt-5">

            <?php
            foreach ($adventure as $adventures) { ?>
              <div class="col-md-3 pb-3">
                <a href="single.php?name=<?php echo $adventures['name']; ?>">

                  <img style="height:285px" class="img-fluid" src="<?php echo $adventures['img']; ?>" alt="">
                  <div class=" info_game">
                    <h5 class="float-left text-white mt-1"><?php echo $adventures['name']; ?></h5>
                    <br>
                    <br>
                    <p class="description"><?php echo $adventures['author']; ?></p>
                  </div>
                  <div class="price  pb-1">
                    <h5 class=" text-white"><?php echo $adventures['price']; ?></h5>
                    <?php if ($adventures['id_console'] == 1) {
                      echo "<img class='type' src='img/playstation.png'>";
                    }elseif ($adventures['id_console'] == 2) {
                      echo "<img class='type' src='img/xbox.png'>";
                    }elseif ($adventures['id_console'] == 3) {
                      echo "<img class='type' src='img/todos.png'>";
                    }elseif ($adventures['id_console'] == 4) {
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
