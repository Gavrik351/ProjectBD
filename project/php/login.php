<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>

    <div class="container mt-4">

        <?php
        if($_COOKIE['user'] == ''):
        ?>

        <div class="row">
            <div class="col">
                <h1 style="color:white;">Registration</h1>
                <form action="check.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" , placeholder="Enter login">
                    <input type="text" class="form-control" name="name" id="name" , placeholder="Enter name">
                    <input type="text" class="form-control" name="password" id="password" ,
                        placeholder="Enter password">
                    <button class="btn btn-success" type="submit">Registration</button>
                </form>
            </div>

            <div class="col">
                <h1 style="color:white;">Login</h1>
                <form action="auth.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" , placeholder="Enter login">
                    <input type="text" class="form-control" name="password" id="password" ,
                        placeholder="Enter password">
                    <button class="btn btn-success" type="submit">Login</button>
                </form>
            </div>

            <?php else: ?>
                <p>Wait, <?=$_COOKIE['user']?>. Are you sure you want to <a href="exit.php">exit?</a>.</p>
            <?php endif;?>

        </div>

    </div>

</body>
</html>