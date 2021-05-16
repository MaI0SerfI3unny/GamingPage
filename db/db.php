<?php

function Error($str){
  echo "
  <div style='width:100%;background:red;color:white;margin:0;border:2px solid black;'>
  <p style='padding-top:1%;padding-bottom:1%;text-align:center;margin:0;font-weight:bold'>$str</p>
  </div>
  <img style='width:100%;max-height:890px' src='img/error.png'>
  ";

}

$type = 'mysql';
$host = 'localhost';
$db = 'game_shop';
$admin = 'root';

try {
  $pdo = new PDO("$type:host=$host;dbname=$db", "$admin");
} catch (PDOException $e) {
  echo Error('Ошибка подключения базы данных');
  die();
}
$query_games = 'SELECT * FROM `games` ORDER BY `games`.`id` DESC';
$query_adventure = 'SELECT * FROM `games` WHERE `id_ca` = 4';
$query_sport = 'SELECT * FROM `games` WHERE `id_ca` = 2';
$query_rpg = 'SELECT * FROM `games` WHERE `id_ca` = 1';
$query_strategy = 'SELECT * FROM `games` WHERE `id_ca` = 3';
$query_popularity = 'SELECT * FROM `games` WHERE `id_popularity`= 1';
$query_banner= 'SELECT * FROM `games` WHERE `id_banner` = 1';
$query_non_banner = 'SELECT * FROM `games` WHERE `id_banner` = 2';
$query_todo = 'SELECT * FROM `games` WHERE `id_console` = 3';
$query_playstation = 'SELECT * FROM `games` WHERE `id_console` = 1';
$query_xbox = 'SELECT * FROM `games` WHERE `id_console` = 2';
$query_pc = 'SELECT * FROM `games` WHERE `id_console` = 4';
$query_admin = "SELECT * FROM `admin`";
$query_settings = "SELECT * FROM `settings`";

$get_games = $pdo->query($query_games);
$get_adventure = $pdo->query($query_adventure);
$get_sport = $pdo->query($query_sport);
$get_rpg = $pdo->query($query_rpg);
$get_strategy = $pdo->query($query_strategy);
$get_popularity = $pdo->query($query_popularity);
$get_banner = $pdo->query($query_banner);
$get_non_banner = $pdo->query($query_non_banner);
$get_todo = $pdo->query($query_todo);
$get_playstation = $pdo->query($query_playstation);
$get_xbox = $pdo->query($query_xbox);
$get_pc = $pdo->query($query_pc);
$get_admin = $pdo->query($query_admin);
$get_settings = $pdo->query($query_settings);


$games = $get_games->fetchAll();
$adventure = $get_adventure->fetchAll();
$sports = $get_sport->fetchAll();
$rpgs = $get_rpg->fetchAll();
$strategys = $get_strategy->fetchAll();
$popularitys = $get_popularity->fetchAll();
$banner = $get_banner->fetchAll();
$todos = $get_todo->fetchAll();
$playstations = $get_playstation->fetchAll();
$xboxs= $get_xbox->fetchAll();
$pcs = $get_pc->fetchAll();
$non_banner = $get_non_banner->fetchAll();
$admin = $get_admin->fetchAll();
$settings = $get_settings->fetchAll();
