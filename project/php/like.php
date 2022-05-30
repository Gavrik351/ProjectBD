<?php 
$trak_id = filter_var(trim($_GET['trak_id']), FILTER_SANITIZE_STRING);
$user_id = filter_var(trim(htmlspecialchars($_COOKIE["id"])), FILTER_SANITIZE_STRING);
// $song_name = filter_var(trim($_GET['trak_name']), FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', '', 'музыкальный плейлист'); 

$result = $mysql->query("INSERT INTO `user_traks` (`id`, `trak`, `song_name`) 
VALUES('$user_id','$trak_id','$trak_name')");


$mysql->close();
header('Location: index.php');
?>