<?php
require_once("database/db_config.php");
require_once("database/DBHandler.php");
require_once("models/OpenPaymentsModel.php");
require_once("app_config.php");

$db = new DBHandler(DB_HOSTNAME, DB_USER, DB_PASSWORD, "OpenPayments");

$OPDModel = new OpenPaymentsModel($db);

$counter = 0;
while($rows = attempt_to_get_more_rows($counter, ROWS_TO_FETCH_AT_ONCE, $OPDModel)) {

    echo "fetching rows $counter to " . ($counter + ROWS_TO_FETCH_AT_ONCE) . "...";

    foreach($rows as $row){
        $OPDModel->store($row);
    }

    $counter += ROWS_TO_FETCH_AT_ONCE;
}

echo "done.";

function attempt_to_get_more_rows($start, $length, $model) {

    $rows = $model->scrapeData($start, $length);
    return !empty($rows) ? $rows : false;
}

