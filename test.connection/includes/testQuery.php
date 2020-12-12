<?php

// query 

$pdo = $pdo->prepare("SELECT * FROM `test_table`;");
$pdo->execute();

while($row = $pdo->fetch(PDO::FETCH_LAZY)) {
    echo $row["id"] . ' ';
    echo $row["test_value"] . '<br>';
}