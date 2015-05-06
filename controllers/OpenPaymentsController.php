<?php

require_once("models/OpenPaymentsModel.php");
require_once("models/ExcelModel.php");

class OpenPaymentsController {

    public static function showDataGrid($db) {

        $OpenPayments = new OpenPaymentsModel($db);
        $rows = $OpenPayments->retrieveAll($_GET);
        $headers = $OpenPayments->scrapeHeaders();

        include("views/OpenPaymentsDataGridView.php");
    }

    public static function exportToExcel($db) {

        $OpenPayments = new OpenPaymentsModel($db);
        $rows = $OpenPayments->retrieveAll($_GET);
        $headers = $OpenPayments->scrapeHeaders();

        $Excel = new ExcelModel($headers, $rows);
        $Excel->export();

    }

}

