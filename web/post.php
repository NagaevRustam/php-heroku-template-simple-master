<?php
session_start();
if (!empty($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
    require 'index.php';
} else {
    echo 'Пользователь не зарегистрирован';
}