<?php 
setcookie('user', $user['name'], time() - 3660 * 24, '/');
setcookie('id', $user_id['id'], time() - 3660 * 24, '/');
header('Location: login.php');
?>