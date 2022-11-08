<?php
session_start();

if (isset($_POST["login"]) && isset($_POST["password"])) {
    require 'pdo.php';
    $user = getAll("SELECT * FROM users WHERE login=:login AND password=:password;", $_POST);
    if (count($user) > 0) {
        $_SESSION['user'] = $user[0];
    }
}
header('Location: /profile.php');