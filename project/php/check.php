<?php $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);

$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);


if(mb_strlen($login) < 3 || mb_strlen($login) > 90){
    echo "Недопустимая длина логина";
    exit();
} else if(mb_strlen($name)<2 || mb_strlen($name) > 50){
    echo "Недопустимая длина имени";
    exit();
}else if(mb_strlen($password)<2 || mb_strlen($password) > 25){
    echo "Недопустимая длина пароля (От 2 до 25 символов)";
    exit();
} 


$password = md5($password."abcdefg12345");

// require_once 'database.php';
$mysql = new mysqli('localhost', 'root', '', 'музыкальный плейлист');
$mysql->query("INSERT INTO `users` (`login`, `name`, `password`) 
VALUES('$login', '$name', '$password')");

$mysql->close();


header("Location: login.php");
die();
?>