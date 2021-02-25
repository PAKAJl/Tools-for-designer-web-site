<?php
require "config.php";
function getPdo()
{
    static $pdo;
    if ($pdo === null) {
        $pdo = new PDO(PDO_DSN, PDO_USER, PDO_PASS);
    }
    return $pdo;
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function get_content(){
    $pdo = getPdo(); // подключаемся к БД
    $query = $pdo->query('SELECT * FROM `modalcontent`'); // задаем запрос к БД
    return $query->fetchAll(PDO::FETCH_OBJ);
}

function get_imagesPacks(){
    $pdo = getPdo(); // подключаемся к БД
    $query = $pdo->query('SELECT * FROM `imagepacks`'); // задаем запрос к БД
    return $query->fetchAll(PDO::FETCH_OBJ);
}