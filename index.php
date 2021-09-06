<?php
use MongoDB\Driver\Query;

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$options = [
    'projection' => ['_id' => 0],  //Не отображать id
];
$filter = [];                      //Фильтра нет - выводим все записи без сортировки
$query = new Query($filter, $options);
$cursor = $manager->executeQuery('bd.locality', $query);
include "header.php";

include "start.php";
include "modals.php";

include "footer.php";