<?php

require_once("models/OpenPaymentsModel.php");

class HomeController {

    public static function showHomePage(){

        $headers = OpenPaymentsModel::scrapeHeaders();
        include("views/HomeView.php");
    }
}

