<html>

<head>
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="header">
        <h1>Удаление пользователей</h1>
    </div>
    <div id="example">Пользователи</div>
    <div id="content">
        <h1>Пользователи</h1>
        <form action="./scripts/run_query.php" method="POST">
            
                
        </form>
        <form action="./delete_polzo.php" method="POST">
            <div>Удалить пользователя: ID = <input type="submit" id='' name="id" value="<?php echo $currency ?>" type='button'></div><br />
        </form><br />

   
    <br />

        <form action="./" method="POST">
            <input type="submit" value="Вернуться">
        </form>
    
    </div>
    <div id="footer"></div>
</body>

</html>