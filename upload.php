<?php
session_start();

$path = "imgs/".time().".jpg";
if (!file_exists('imgs')) {
    mkdir('imgs', 0777, true);
}

move_uploaded_file($_FILES["img"]["tmp_name"], $path);
$_SESSION['user']['img_src'] = $path;
require "pdo.php";

getAll("UPDATE `users` SET `img_src`=:img_src WHERE `id`=:id", ["id"=>$_SESSION['user']['id'], "img_src"=>$path]);

header('Location: /profile.php');
