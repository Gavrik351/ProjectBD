<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$password = md5($password."abcdefg12345");

// require_once 'database.php';
$mysql = new mysqli('localhost', 'root', '', 'музыкальный плейлист'); 

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc();

 if(count($user)==0){
 echo "Wrong data";
 exit();
 }

 setcookie('user', $user["name"],time()+3600 * 24,"/");
 setcookie('id', $user["id"],time()+3600 * 24,"/");

$mysql->close();
header('Location: index.php');
?>
