<?php
require '../../db/db.php';
if (isset($_REQUEST['new_seo'])) {
  $seo_name = $_REQUEST['name_seo'];
  $seo_description = $_REQUEST['description_seo'];
  $seo_keywords = $_REQUEST['keywords_seo'];
  $query_add_new_seo_settings = "UPDATE `settings` SET `name` = '$seo_name', `description` = '$seo_description', `keywords` = '$seo_keywords' WHERE `settings`.`id` = 1";
  $get_add_new_seo_settings = $pdo->query($query_add_new_seo_settings);
  $add_new_seo_settings = $get_add_new_seo_settings->fetchAll();
  header('Location: ../settings.php');
}
