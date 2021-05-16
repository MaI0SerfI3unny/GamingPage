<?php require 'view/header.php'; ?>
<main style="min-height:800px">
  <?php
  $game_id = $_GET['name'];
  $guery_gamik = "SELECT * FROM `games` WHERE `name` = '$game_id'";
  $get_gamik = $pdo->query($guery_gamik);
  $gamik = $get_gamik->fetchAll();
  $query_get_comment = "SELECT * FROM `comments` WHERE `id_game` = '$game_id'";
  $get_comment = $pdo->query($query_get_comment);
  $comments = $get_comment->fetchAll();

   ?>
   <div class="container pt-4">
     <div class="row">
       <div class="col-md-7">
         <img style='max-height:500px' class='img-fluid' src="<?php echo $gamik[0]['img']; ?>" alt="">
       </div>
       <div class="col-md-5">
         <h2 class="text-white"><?php echo $gamik[0]['name']; ?></h2>
         <p class="text-white">Price: <?php echo $gamik[0]['price']; ?></p>
         <p class="text-white">Author: <?php echo $gamik[0]['author']; ?></p>
         <p class="text-white">Description:</p>
         <p class="text-white"><?php echo $gamik[0]['description']; ?></p>
       </div>
     </div>
     <div class="container pt-5">
       <div class="row">
         <div class="col-md-6 p-0">
           <h5 class="text-white">Залишити коментар</h5>
           <form class="" action="functions/send.php" method="post">
             <input type="hidden" name="id" value="<?php echo $game_id; ?>">
             <textarea name="comment" rows="8" cols="80"></textarea>
             <input type="submit" name="" value="Відправити коментар">
           </form>

         </div>
         <div class="col-md-6">
           <h2 class="text-white pb-2">Коментарі</h2>
           <?php foreach ($comments as $comment): ?>
             <div class="col-md-12 pt-3 pb-3">
               <img style='width:80px' class="float-left mr-3" src="img/avatar.png" alt="">
               <p class="text-white">Коментар#<?php echo $comment['id']; ?></p>
               <p class="text-white"><?php echo $comment['name_comment']; ?></p>
             </div>
           <?php endforeach; ?>
         </div>
       </div>
     </div>
   </div>
</main>
</body>
</html>
