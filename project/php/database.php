<?php

$par1_ip = "localhost";
$par2_name = "root";
$par3_p = "";
$par4_db = "музыкальный плейлист";

$induction = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);

if ($induction == false)
{
    echo "Connection error!";
}


?>