<?php
$dbHost='localhost';
$dbName='speedcubing';
$dbUserName='admin_cubas';
$dbPass='1111';

try {
    $conn = new PDO("mysql:host=".$dbHost.";dbname=".$dbName, $dbUserName, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES utf8 COLLATE utf8_unicode_ci; SET CHARACTER SET utf8");
}
catch(PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();
}
