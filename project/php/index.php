<?php

include "database.php";

$result = mysqli_query($induction, "SELECT DISTINCT genre FROM `traks`"); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.main.css">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>

    <p style="color:white; text-align:center">Hello, <?=$_COOKIE['user']?>. To exit press<a href="./exit.php">here</a></p>
    <a class="btn btn1" href='admin.php'>adminka</a>
    <header>

        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu">
                            <ul>
                                <?php
                            while($traks = mysqli_fetch_assoc($result))
                            {
                                ?>
                                <li>

                                    <a
                                     href="index.php?genre=<?php echo $traks['genre']; ?>"><?php echo $traks['genre']; ?></a>

                                </li>
                                <?php
                            }
                            ?>
                                 <div class="middle">
                                <a class="btn btn1" onclick="window.location.href='liked_traks.php'">Liked tracks</a>
                                 </div>

                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </nav>
    </header>
    <br />


    <div style="color:white;">
        <?php
                $genre = filter_var(trim($_GET['genre']), FILTER_SANITIZE_STRING);

                $conn = mysqli_connect('localhost', 'root', '', 'музыкальный плейлист');
                $query = "SELECT * FROM `traks` WHERE `genre` = '$genre'";
               
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                     $song_name = $row["trak_name"];
                     $singer = $row["singer"];
                     echo "<b>Track name: </b>" . $song_name . "<br>". "<b>Singer:</b> ".  $singer;
                     $href = "like.php?trak_id=".$row["id"]."&user_id=".$_COOKIE['user'];
                     echo "<a  href=$href>like</a>";
                     echo "<br/>". "<br/>";
                }
                ?>


    </div>



    <footer>

    </footer>


    <script src="js/jquery-3.3.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>

</html>