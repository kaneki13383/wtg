<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль <?=$_SESSION['user']['login']?></title>
</head>
<body>
    <h1>Роль: <?
        if($_SESSION['user']['role'] == 1){
            echo 'Админ';
        }
        else{
            echo 'Пользователь';
        }
    ?></h1>
</body>
</html>