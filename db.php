<?php
use MongoDB\Driver\BulkWrite;
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$field = $_POST['field'];
$filter = ['driver' => $field];
$options = ["limit" => 1];
$bulk = new BulkWrite;
$bulk->delete($filter, $options);
$result = $manager->executeBulkWrite('bd.locality', $bulk);