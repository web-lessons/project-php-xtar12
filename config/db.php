<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "baza";
$mysqli = mysqli_connect($host, $user, $password);

if ($mysqli->connect_error) {
    die("DB error");
}