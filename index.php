<?php require 'view/header.php' ?>
<main>
<div class="games">
  <div class="container mt-5">
    <h2 class="float-left text-white">Ігри</h2>
    <ul class="ml-5 mt-2">
      <li class="mr-3"><img class="mr-1" src="img/todos.png"><a href="todos">Todos</a></li>
      <li class="mr-3"><img class="mr-1" src="img/playstation.png"><a href="playstation">Playstation</a></li>
      <li class="mr-3"><img class="mr-1" src="img/xbox.png"><a href="xbox">Xbox</a></li>
      <li class="mr-3"><img class="mr-1" src="img/pc.png"><a href="pc">Personal Computer</a></li>
    </ul>
    <div class="row justify-content-center mt-5">
      <div class="slider">
        <div class="slider__wrapper">
          <?php
          foreach ($games as $game) { ?>
            <div class="slider__item">
              <a href="single.php?name=<?php echo $game['name']; ?>">

                <img class="bg_game" src="<?php echo $game['img']; ?>" alt="">
                <div class=" pl-3 info_game">
                  <h5 class="float-left text-white mr-3"><?php echo $game['name']; ?></h5>
                  <label class="float-right"><p class="text-center mt-2 text-white"><?php echo $game['mark']; ?></p></label>
                  <br>
                  <p class="description"><?php echo $game['author']; ?></p>
                </div>
                <div class="price mt-1 pt-1 pb-1">
                  <h5 class=" text-white pl-3"><?php echo $game['price']; ?></h5>
                  <?php if ($game['id_console'] == 1) {
                    echo "<img class='type' src='img/playstation.png'>";
                  }elseif ($game['id_console'] == 2) {
                    echo "<img class='type' src='img/xbox.png'>";
                  }elseif ($game['id_console'] == 3) {
                    echo "<img class='type' src='img/todos.png'>";
                  }elseif ($game['id_console'] == 4) {
                    echo "<img class='type' src='img/pc.png'>";
                  }
                   ?>

                </div>
              </a>
            </div>
          <?php } ?>
        </div>
        <a class="slider__control slider__control_left" href="#" role="button"></a>
        <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
      </div>
      <script src="js/slider_games.js"></script>
    </div>
  </div>
</div>


<div class="pre_games mt-5">
<div class="container-fluid mt-5">
  <h2 class="mt-5 pt-4 mb-5 text-white text-center text-uppercase">Популярні</h2>

<ul id="sliders">
  <?php
  foreach ($popularitys as $popularity) { ?>
    <a href="single.php?name=<?php echo $popularity['name']; ?>"><li class="sliderin showingr"><img src="<?php echo $popularity['img']; ?>"></li></a>
<?php } ?>

</ul>
</div>
</div>
<script src="js/pre_slider.js">

</script>

<div class="category">
  <div class="container">
    <h2 class="text-white mt-5 pt-5">Категорії</h2>
    <div class="row">
      <div class="col-md-7 mt-4">
          <a href="adventare">
        <div class="">
      <button type="button" name="button"><p>Пригоди</p><svg class="ml-3"
xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
width="31px" height="32px">
<defs>
<filter id="Filter_0">
  <feFlood flood-color="rgb(255, 255, 255)" flood-opacity="1" result="floodOut" />
  <feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
  <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
</filter>

</defs>
<g filter="url(#Filter_0)">
<path fill-rule="evenodd"  fill="rgb(0, 0, 0)"
d="M8.071,7.000 L6.657,8.414 L6.657,8.414 L2.000,13.071 L0.586,11.657 L5.243,7.000 L0.586,2.343 L2.000,0.929 L6.657,5.586 L6.657,5.586 L8.071,7.000 Z"/>
</g>
</svg></button>
        </div>
<img class="img-fluid" src="img/tomb.png" alt="">
</a>
      </div>
      <div class="col-md-5 mt-4">
        <a href="sport">
        <div class="">
        <button type="button" name="button"><p>Спорт</p><svg class="ml-3"
xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
width="31px" height="32px">
<defs>
<filter id="Filter_0">
  <feFlood flood-color="rgb(255, 255, 255)" flood-opacity="1" result="floodOut" />
  <feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
  <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
</filter>

</defs>
<g filter="url(#Filter_0)">
<path fill-rule="evenodd"  fill="rgb(0, 0, 0)"
d="M8.071,7.000 L6.657,8.414 L6.657,8.414 L2.000,13.071 L0.586,11.657 L5.243,7.000 L0.586,2.343 L2.000,0.929 L6.657,5.586 L6.657,5.586 L8.071,7.000 Z"/>
</g>
</svg></button>
        </div>
        <img class="img-fluid" src="img/sport.png" alt="">
      </a>
      </div>
      <div class="col-md-5 mt-4">
        <a href="rpg">
        <div class="">
          <button type="button" name="button"><p>РПГ</p><svg class="ml-3"
xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
width="31px" height="32px">
<defs>
<filter id="Filter_0">
  <feFlood flood-color="rgb(255, 255, 255)" flood-opacity="1" result="floodOut" />
  <feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
  <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
</filter>

</defs>
<g filter="url(#Filter_0)">
<path fill-rule="evenodd"  fill="rgb(0, 0, 0)"
d="M8.071,7.000 L6.657,8.414 L6.657,8.414 L2.000,13.071 L0.586,11.657 L5.243,7.000 L0.586,2.343 L2.000,0.929 L6.657,5.586 L6.657,5.586 L8.071,7.000 Z"/>
</g>
</svg></button>
        </div>
        <img class="img-fluid" src="img/rpg.png" alt="">
      </a>
      </div>
      <div class="col-md-7 mt-4">
        <a href="strategy">
        <div class="">
        <button type="button" name="button"><p>Стратегія</p><svg class="ml-3"
xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
width="31px" height="32px">
<defs>
<filter id="Filter_0">
  <feFlood flood-color="rgb(255, 255, 255)" flood-opacity="1" result="floodOut" />
  <feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
  <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
</filter>

</defs>
<g filter="url(#Filter_0)">
<path fill-rule="evenodd"  fill="rgb(0, 0, 0)"
d="M8.071,7.000 L6.657,8.414 L6.657,8.414 L2.000,13.071 L0.586,11.657 L5.243,7.000 L0.586,2.343 L2.000,0.929 L6.657,5.586 L6.657,5.586 L8.071,7.000 Z"/>
</g>
</svg></button>
        </div>
          <img class="img-fluid" src="img/strategy.png" alt="">
        </a>
      </div>
    </div>
  </div>
</div>
<?php component('view/footer.php') ?>
</main>
  </body>
</html>
