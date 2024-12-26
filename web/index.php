<!DOCTYPE html>
<html>
<head>
    <title>Создание и загрузка приложения на хостинг</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
    session_start();
    $name = 'Rustam';
    $value = 'Author: Nagaev Rustam';
    setcookie($name, $value);
?>

<?php if (empty($_SESSION['username'])): ?>
    <form action="post.php" method="post" enctype="multipart/form-data">
        <label for="text">Имя пользователя:</label>
        <input type="text" id="name" name="username">
        <br>
        <button type="submit" value="Отправить">Загрузить</button>
    </form>
<?php else: ?>
    <?php
        echo 'Привет, ' . $_SESSION['username'];
    ?>
    <form action="exit.php" method="post" enctype="multipart/form-data">
        <button type="submit" value="Exit">Exit</button>
    </form>
<?php endif; ?>
</body>
</html>