<?php
require "functions.php";
header('Location: index.php/#order');

$Name = test_input($_POST['name']);
$Email = test_input($_POST['email']);
$Message = test_input($_POST['message']);

if (isset($_POST)) {
    $Name = isset($_POST['name']) ? $_POST['name'] : '';
    $Email = isset($_POST['email']) ? $_POST['email'] : '';
    $Message = isset($_POST['message']) ? $_POST['message'] : '';

    if ($Name == ''){
        exit();
    }
    if ($Email == ''){
        exit();
    }
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        exit();// проверка на валидность email
    }
        if ($Message == ''){
        exit();
    }

    $pdo = getPdo();
    $sql = "INSERT INTO orders(Name, Email, Text) VALUES (?,?,?);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$Name,$Email,$Message]);
}

$Name = htmlspecialchars($Name);
$Email = htmlspecialchars($Email);
$Message = htmlspecialchars($Message);

$Name = urldecode($Name);
$Email = urldecode($Email);
$Message = urldecode($Message);

mail("m-zamula@mail.ru", "Заявка с сайта", "ФИО:" . $Name .". E-mail: " . $Email . "Сообщение". $Message, "From: example2@mail.ru \r\n");

