<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<?php

require_once('vendor/autoload.php');
$DB = new App\models\DB();
$DB->connect();

try {
//    $resInsert = $DB->update("forTest", ["title" => "222", "date" => "bbb"], "id = 2");
//    $resInsert = $DB->insert("forTest", ["title" => "222", "date" => "bbb"]);
//    $resInsert = $DB->get_row("SELECT * FROM forTest WHERE id = 3");
    $resInsert = $DB->get_rows("SELECT * FROM forTest");

    echo '<ul>';

    echo '</ul>';
//    echo '<pre>';
//    print_r($resInsert);
//    echo '</pre>';

}
catch (Exception $e) {
    echo $e->getMessage();
}
?>

<table class="table table-primary">
    <tr>
        <th>title</th>
        <th>date</th>
        <th>author</th>
    </tr>

    <?php
    foreach ($resInsert as $value) {
    echo '<tr>';
    echo '<td>' . $value['title'] . '</td>';
    echo '<td>' . $value['date'] . '</td>';
    echo '</tr>';
    }

    ?>

</table>


</body>
</html>

