<?php
$id_order = $_POST['id'];
$conn = mysqli_connect('localhost', 'root', '', 'музыкальный плейлист');
$res_id = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$id'");
while ($rowid1 = mysqli_fetch_assoc($res_id)) {
    $id = "$rowid1[user_id]";
}
mysqli_query($conn, "DELETE FROM `users` WHERE `user`.`user_id` = '$id'");
?>
<html>

<head>
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="header">
        <h1></h1>
    </div>
    <div id="example">Пользователь</div>
    <div id="content">
        <h1>Пользователь удален</h1>
        <p>Пользователь: <?php echo "ID = $id_order" ?> </p>
        <br />
       
            <form action="./admin.php" method="POST">
                <input type="submit" value="Вернуться">
            </form>
        
    </div>
    <div id="footer"></div>
</body>

</html>