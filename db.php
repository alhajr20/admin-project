<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'insta';
$db_user = 'root';
$db_password = '';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_password, $options);
} catch(PDOException $e) {
    die("No database connection");
}