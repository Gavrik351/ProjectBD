<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <h1 style="color: white;">Liked tracks</h1>
<form style="color: white;">
                                <div class="middle">
                                <a class="btn btn1" href='index.php'>Back</a>
                                 </div>
    <?php
        
                $user_traks = filter_var(trim(htmlspecialchars($_COOKIE["id"])), FILTER_SANITIZE_STRING);
                // $song_name = filter_var(trim($_GET['trak_name']), FILTER_SANITIZE_STRING);
                $conn = mysqli_connect('localhost', 'root', '', 'музыкальный плейлист');
                $query = "SELECT * FROM `user_traks` WHERE `id` = '$user_traks'";
               
                $result = mysqli_query($conn, $query);
                
                while ($row = mysqli_fetch_assoc($result)) {
                     $song_id = $row["trak"];
                    //  $trak_name = $row["song_name"];
                     echo "Track name: " . $song_id;
                     $href = "like.php?trak=".$row["id"];
                     echo "<br/>";
                
                 }
                ?>
</form>
</body>
</html>