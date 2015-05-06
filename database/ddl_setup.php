<?php

require('database/DBHandler.php');
require('database/db_config.php');
require('app_config.php');
require('models/OpenPaymentsModel.php');

$db = new DBHandler(DB_HOSTNAME, DB_USER, DB_PASSWORD);
$headers = OpenPaymentsModel::scrapeHeaders();

$fields = "";
$extra_fields = "";

foreach($headers as $header) {
   $fields .= $db->secure("opd_" . $header->id ." text, ");
}

$extra_fields .= "opd_created_meta int,
                  opd_updated_at   int,
                  opd_position     int,
                  opd_updated_meta int,
                  opd_id           bigint,
                  opd_created_at   int,
                  opd_sid          int PRIMARY KEY"; //int bigint and int? maybe just remove non-numerics

$db->query("DROP DATABASE IF EXISTS " . DB_NAME);
$db->query("CREATE DATABASE " . DB_NAME);
$db->query("USE " . DB_NAME);
$db->query("CREATE TABLE " . DB_TABLE ."(" . $fields . $extra_fields . ")");
