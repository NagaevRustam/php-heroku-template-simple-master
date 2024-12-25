<!DOCTYPE html>
<html>
<head>
    <title>Создание и загрузка приложения на хостинг</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
    $name = 'Rustam';
    $value = 'Author: Nagaev Rustam';
    setcookie($name, $value);
?>

<!--Если переменная пуста или не существует, вернуть true, и выполнить следующее-->
<?php if (empty($_POST['username'])): ?>
    <form action="post.php" method="post" enctype="multipart/form-data">
        <label for="text">Имя пользователя:</label>
        <input type="text" id="name" name="username">
        <br>
        <button type="submit" value="Отправить">Загрузить</button>
    </form>
    <?php else: ?>
    <form action="exit.php" method="post" enctype="multipart/form-data">
        <button type="submit" value="Exit">Exit</button>
    </form>
<?php endif; ?>

<!--isset - проверяет, существует ли переменная (объявлена ли она), она может быть пустой-->

<?php

include 'post.php';
echo 'Информация';
echo ($_POST['username']);
echo ($_SESSION['username']);
?>
</body>
</html>