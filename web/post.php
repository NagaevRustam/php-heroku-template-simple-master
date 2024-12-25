<?php
session_start();
if (!empty($_POST['username'])) {//Если переменная не пуста, вернуть true, и выполнить следующее
    $_SESSION['username'] = $_POST['username'];
    header('Location: index.php');
    exit();
} else {
    echo 'Пользователь не зарегистрирован';
}
?>

<form action="index.php" method="post" enctype="multipart/form-data">
    <button type="submit" value="Назад">Назад</button>
</form>