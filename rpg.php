  <?php require 'view/header.php'; ?>
    <main>
      <div class="list">
      <div class="container mt-5">
      <h1 class="text-white">Rpg</h1>
      <div class="row  mt-5">

            <?php
            foreach ($rpgs as $rpg) { ?>
              <div class="col-md-3 pb-3">
                <a href="single.php?name=<?php echo $rpg['name']; ?>">

                  <img style="height:285px" class="img-fluid" src="<?php echo $rpg['img']; ?>" alt="">
                  <div class=" info_game">
                    <h5 class="float-left text-white mt-1"><?php echo $rpg['name']; ?></h5>
                    <br>
                    <br>
                    <p class="description"><?php echo $rpg['author']; ?></p>
                  </div>
                  <div class="price  pb-1">
                    <h5 class=" text-white"><?php echo $rpg['price']; ?></h5>
                    <?php if ($rpg['id_console'] == 1) {
                      echo "<img class='type' src='img/playstation.png'>";
                    }elseif ($rpg['id_console'] == 2) {
                      echo "<img class='type' src='img/xbox.png'>";
                    }elseif ($rpg['id_console'] == 3) {
                      echo "<img class='type' src='img/todos.png'>";
                    }elseif ($rpg['id_console'] == 4) {
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
