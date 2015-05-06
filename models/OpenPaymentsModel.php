<?php

class OpenPaymentsModel{

    private $db;

    function __construct($db_handle) {

        $this->db = $db_handle;
    }

    public function retrieveAll($fields) {

        $where_query ="";
        foreach($fields as $key=>$value){
            if ($key != "undefined" && $value != "" && $value != "undefined") {
                $where_query .= " AND " . $this->db->secure($key) . " LIKE '" . $this->db->secure($value) . "%'";
            }
        }

        $sql = "SELECT *
                  FROM " . DB_TABLE . "
               " . preg_replace('/AND/', 'WHERE', $where_query, 1) . " LIMIT " . ROWS_TO_DISPLAY_AT_ONCE;

        $result = $this->db->query($sql);

        $rows = array();
        while ($row = mysqli_fetch_row($result))
        {
            array_push($rows, $row);
        }

        return $rows;
    }

    public function store($OPDRow){

        $fields = "";
        $values = "";
        $field_values ="";

        foreach($OPDRow as $field=>$value) {
            $fields .= $this->db->secure("opd_" . $field . ",");
            $values .= "'".$this->db->secure("$value") . "',";
            $field_values .= " opd_" . $this->db->secure($field) . " = '" . $this->db->secure($value) . "',";
        }

        $fields = substr($fields, 0, -1);
        $values = substr($values, 0, -1);
        $field_values = substr($field_values, 0, -1);
        $this->db->query("INSERT INTO " . DB_TABLE . "($fields) VALUES ($values) ON DUPLICATE KEY UPDATE $field_values");
    }

    public static function scrapeHeaders() {

        $url = URL_TO_FETCH_HEADERS;

        $request = curl_init();

        curl_setopt($request, CURLOPT_URL, $url);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);

        $view = json_decode(curl_exec($request));
        return $view->columns;

    }

    public static function scrapeData($start, $length) {

        $request = curl_init();

        $url = URL_TO_SCRAPE_DATA . "&start=$start&length=$length";
        $sendStream = SEND_STREAM_VIEW;

        curl_setopt($request, CURLOPT_URL, $url);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($request, CURLOPT_HTTPHEADER, array("Content-type: application/x-rethync-request"));
        curl_setopt($request, CURLOPT_POSTFIELDS, $sendStream);

        $result = curl_exec($request);
        curl_close($request);
        return json_decode($result, true);
    }
}