<?php session_start(); ?>
<header>
  <div class="container-fluid">
    <h3 class="text-white ml-4 float-left"><img class="mr-3" style="width:40px" src="img/logo.png" alt="">Finn-Panel</h3>
    <a class="float-right mr-5" style='margin-top:0.7rem' href="#logout">Выйти</a>
    <div class="float-right mr-5">
      <p class="float-right "><img style="width:50px" src="img/avatar.png" class="mr-3" alt=""><?php echo mb_strtoupper($_SESSION['login']) ?></p>
    </div>
  </div>
  <div id="logout">
    <div id="okno_logout">
      <h4 class="mb-4">Вы точно хотите выйти?</h4>
      <a  href='#'><button style="padding-left:40px;padding-right:40px">Нет</button></a>
      <a href="vendor/logout.php"><button style="padding-left:40px;padding-right:40px">Да</button></a>
    </div>
  </div>
</header>
