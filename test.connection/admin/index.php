<?php

session_start();

$login = "admin";
$psw = "admin";

if ($_SESSION["login"] === $login && $_SESSION["password"] === $psw) {

    header("Location: content.php");
}

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Log In</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Вход</h1>
        <span class="sub-title">в админ-панель</span>
        <form class="form" action="../includes/login.php" method="post" enctype="multipart/form-data">
            <div class="input-fields">
                <div class="input-field">
                    <label for="login">Логин</label>
                    <input class="login" name="login" type="text" required>
                </div>

                <div class="input-field">
                    <label for="login">Пароль</label>
                    <input class="password" type="password" name="password" id="psw" required>
                </div>
            </div>

            <button class="btn" type="submit">Войти</button>
        </form>
    </div>
</body>
</html>