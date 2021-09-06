<?php
use MongoDB\Driver\BulkWrite;
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$driver = $_POST['driver'];
$avto = $_POST['avto'];
$driverNew = $_POST['drivernew'];
$avtoNew = $_POST['avtonew'];
$filter = ["driver" => $driver];
$update = ['$set' => ["driver" => $driverNew, "model" => $avtoNew]];
$options = ["limit" => 1, "upsert" => false];
$bulk = new BulkWrite;
$bulk->update($filter, $update, $options);
$result = $manager->executeBulkWrite('bd.locality', $bulk);