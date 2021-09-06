<?php
use MongoDB\Driver\BulkWrite;
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$avto = $_POST['avto'];
$driver = $_POST['driver'];
$document = [
    "model" => $avto,
    "driver" => $driver
    ];
$bulk = new BulkWrite;
$id = $bulk->insert($document);
try {
    $result = $manager->executeBulkWrite('bd.locality', $bulk);
}
catch (MongoDB\Driver\Exception\Exception $e) {
    http_response_code(403);
    echo "Ошибка. Водитель с такой фамилией уже существует";
}
