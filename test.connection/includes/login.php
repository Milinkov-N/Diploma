<?php

require_once("connectDB.php");
$stmt = $pdo->prepare("SELECT login, password FROM user WHERE login = :login AND password = :password;");

$stmt->bindParam(':login', $login);
$stmt->bindParam(':password', $psw);

$login = $_POST["login"];
$psw = $_POST["password"];
    
$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_LAZY)) {
    $login = $row["login"];
    $psw = $row["password"];
}

if ($login === $_POST["login"] && $psw === $_POST["password"]) {

    session_start();

    $_SESSION["login"] = $_POST["login"];
    $_SESSION["password"] = $_POST["password"];

    header("Location: /admin/content.php");
}