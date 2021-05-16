<?php
require '../../db/db.php';
if (isset($_REQUEST['add_banner_button'])) {
  foreach ($_REQUEST['banner_id_add'] as $k => $v) {
 if($v){
   $query_change_status_banner = "UPDATE `games` SET `id_banner` = '1' WHERE `games`.`id` = $k";
   $get_change_status_banner = $pdo->query($query_change_status_banner);
   $change_status_banner = $get_change_status_banner->fetchAll();
  }else{}
 }
}

header('Location: ../banner.php');
