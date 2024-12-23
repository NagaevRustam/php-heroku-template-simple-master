<!DOCTYPE html>
<html>
<head>
    <title>Создание и загрузка приложения на хостинг</title>
    <meta charset="UTF-8">
</head>
<body>

<!-- 
(ВЫПОЛНЕНО)1) Заведите публичный репозиторий на GitHub для этой работы.
(ВЫПОЛНЕНО)2) Скачайте шаблон приложения.
(ВЫПОЛНЕНО)3) Создайте файл index.php, который будет через include подключать и отображать HTML-код, содержащий:
(ВЫПОЛНЕНО)-информацию о вас как об авторе,
(ВЫПОЛНЕНО)-форму, отправляющую данные в post.php с текстовым полем, подразумевающим ввод имени пользователя.
(ВЫПОЛНЕНО)4) Рядом создайте PHP-файл post.php, который будет принимать формы, сохранять имя пользователя в сессию и перенаправлять браузер обратно на index.php.
(ВЫПОЛНЕНО)5) Теперь вернитесь в index.php и добавьте проверку. Если внутри сессии существует непустая переменная с именем пользователя, то просто поприветствуйте пользователя, не отображая форму, и разместите ссылку на скрипт exit.php. Иначе отобразите форму как было раньше.
(ВЫПОЛНЕНО)6) В скрипте exit.php очищайте переменную сессию, содержащую имя пользователя, и перенаправляйте браузер обратно на index.php.
7) Загрузите работу на хостинг, используя инструкцию.
-->
<?php if (empty($_POST['username'])): ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <!--Форма, отправляющая имя пользователя-->
        <label for="text">Имя пользователя:</label>
        <input type="text" id="name" name="username">
        <br>
        
        <!--Кнопка отправить-->
        <button type="submit" value="Отправить">Загрузить</button>
    </form>
<?php endif; ?>

<?php if (!empty($_POST['username'])): ?> <!--Почему вариант с if (!isset($_SESSION['username'])) в этой строке не подходит, когда он был бы логичнее-->
    <form action="exit.php" method="post" enctype="multipart/form-data">
        <!--Кнопка пройти на страницу exit и удалить сессию-->
        <button type="submit" value="Exit">Exit</button>
    </form>
<?php endif; ?>

<?php
    $name = 'Rustam';
    $value = 'Author: Nagaev Rustam';
    setcookie($name, $value);

    include 'post.php';

    if (isset($_SESSION['username'])) {
        echo 'Привет, ' . $_SESSION['username'];
    }
?>
</body>
</html>