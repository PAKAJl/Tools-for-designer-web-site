<?php
require "functions.php";
header('Location: index.php/#order');
if (isset($_POST)) {

    $Name = test_input($_POST['name']);
    $Email = test_input($_POST['email']);
    $Message = test_input($_POST['message']);

    $pdo = getPdo();
    $sql = "INSERT INTO orders(Name, Email, Text) VALUES (?,?,?);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$Name,$Email,$Message]);
}
