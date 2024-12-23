<?php
session_start();
if (!empty($_POST['username'])) { 
    // Cоздайте PHP-файл post.php, который будет принимать формы, сохранять имя пользователя в сессию и перенаправлять браузер обратно на index.php.
    $_SESSION['username'] = $_POST['username'];
} else {
    echo 'Пользователь не зарегистрирован';
}

echo '<pre>';
//print_r($_POST);
//print_r($_SESSION);
echo '<pre>';
