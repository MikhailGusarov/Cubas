<?php
require_once 'sqlConnect.php';
require_once 'function.php';

try {
    $db =  new PDO($dsn, $user, $pass, $opt);
}
catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}
try {
    $sql = 'SELECT text FROM slide ORDER BY seqNum;';
    $res = $db -> query($sql);
    $slides = $res  -> fetchAll();
}
catch (PDOException $e) {
    die('Запрос завершился неудачей: ' . $e->getMessage());
}
try {
    $sql = 'SELECT * FROM service LIMIT 3;';
    $res = $db -> query($sql);
    $service = $res  -> fetchAll();
}
catch (PDOException $e) {
    die('Запрос завершился неудачей: ' . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

}

$pageContent = renderTemplate('template/index.php',
    [
        'slides' => $slides,
        'service' => $service
    ]);
echo $pageContent;