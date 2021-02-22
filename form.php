<?php
require "functions.php";
header('Location: index.php/#order');
if (isset($_POST)) {
    $pdo = getPdo();
    $sql = "INSERT INTO orders(Name, Email, Text) VALUES (?,?,?);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['name'],$_POST['email'],$_POST['message']]);
}
