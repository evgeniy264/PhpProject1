<?php

$host = 'localhost';
$db = 'news';
$user = 'root';
$pass = 'dp73kv85n';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $conn = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Не удалось подключиться к БД: " . $e->getMessage();
}


