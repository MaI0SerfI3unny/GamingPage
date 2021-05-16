<?php
require '../../db/db.php';
if (isset($_REQUEST['delete_banner_button'])) {
  foreach ($_REQUEST['banner_id_delete'] as $k => $v) {
 if($v){
   $query_change_status_banner = "UPDATE `games` SET `id_banner` = '2' WHERE `games`.`id` = $k";
   $get_change_status_banner = $pdo->query($query_change_status_banner);
   $change_status_banner = $get_change_status_banner->fetchAll();
  }else{}
 }
}

header('Location: ../banner.php');
