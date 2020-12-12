<?php

// connection to database

$host = 'localhost';
$db = 'testdb';
$user = 'root';
$pass = 'MySQL_root_W8';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br>";
    die();
}