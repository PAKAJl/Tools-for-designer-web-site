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