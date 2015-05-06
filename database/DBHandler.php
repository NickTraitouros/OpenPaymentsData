<?php

class DBHandler {

    private $conn;

    function __construct($servername, $username, $password, $name = FALSE) {

        $this->conn = new mysqli($servername, $username, $password);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($name) {
            mysqli_select_db($this->conn, $name);
        }
    }

    function secure($string) {
        return mysqli_real_escape_string($this->conn, $string);
    }

    function query($sql) {
        try {
            return mysqli_query($this->conn, $sql);
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}