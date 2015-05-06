<?php

require_once("app_config.php");
require_once("controllers/HomeController.php");
require_once("controllers/OpenPaymentsController.php");
require_once("database/db_config.php");
require_once("database/DBHandler.php");

$db = new DBHandler(DB_HOSTNAME, DB_USER, DB_PASSWORD, DB_NAME);

$action = isset($_GET["action"]) ? $_GET["action"] : "home";
unset($_GET["action"]);

if ($action == "export") {
    OpenPaymentsController::exportToExcel($db);
}

else if ($action == "showDataGrid") {
    OpenPaymentsController::showDataGrid($db);
}

else if ($action == "home") {
    HomeController::showHomePage();
}




