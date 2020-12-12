<?php 

session_start();

$login = "admin";
$psw = "admin";

if ($_SESSION["login"] !== $login || $_SESSION["password"] !== $psw) {
    header("Location: /admin/");
} else {
    echo "Вход успешный!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <style>
        a {
            position: absolute;
            top: 30px;
            right: 30px;
        }

        .btn {
            width: 130px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #78BC61;
            border: 1px solid #78BC61;
            border-radius: 6px;
            font-family: 'Segoe UI', sans-serif;
            font-size: 14px;
            font-weight: 700;
            color: #fff;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            outline: none;
            cursor: pointer;
            transition: all .2s ease-in-out;
        }

        .btn:hover {
            background: none;
            color: #78BC61;
        }
    </style>
</head>
<body>
    <a class="btn" href="../includes/logout.php">
        <div class="btn">Выход</div>
    </a>
</body>
</html>