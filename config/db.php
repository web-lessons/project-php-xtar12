<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "shop";
$mysqli = mysqli_connect($host, $user, $password);

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Ошибка подключения: ".mysqli_connect_error());
}