<?php

require_once('vendor/autoload.php');
$DB = new App\models\DB();
$DB->connect();

try {
//    $resInsert = $DB->update("forTest", ["title" => "222", "date" => "bbb"], "id = 2");
//    $resInsert = $DB->insert("forTest", ["title" => "222", "date" => "bbb"]);
//    $resInsert = $DB->get_row("SELECT * FROM forTest WHERE id = 3");
    $resInsert = $DB->get_rows("SELECT * FROM forTest");

    print_r($resInsert);
}
catch (Exception $e) {
    echo $e->getMessage();
}