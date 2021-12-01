<?php
session_start();
if (isset($_SESSION['name'])) {
    echo '<p> Привет, ' . ($_SESSION['name'] . '</p>');
    echo '<p> Твой логин: ' . ($_SESSION['login'] . '</p>');
    echo '<p> Твоя почта: ' . ($_SESSION['email'] . '</p>');
    echo '<p> Дата создания аккаунта: ' . ($_SESSION['created_at'] . '</p>');
}

if (isset($_COOKIE['islogged'])) {
    echo 'You are authorized';
} else {
    header('location: login.php');
}
