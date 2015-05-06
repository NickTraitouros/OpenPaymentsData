<?php

require "PHPExcel/Classes/PHPExcel.php";

class ExcelModel {

    private $objPHPExcel;

    function __construct($headers, $rows){

        date_default_timezone_set('America/New_York');
        $this->objPHPExcel = new PHPExcel();

        $excelHeaders = array();
        foreach($headers as $header) {
            array_push($excelHeaders, $header->name);
        }

        $excelRows = array();
        foreach($rows as $row) {

            $fields = array();
            foreach($row as $field){
                array_push($fields, $field);
            }

            array_push($excelRows, $fields);
        }

        $this->objPHPExcel->getProperties()->setCreator("Nick Traitouros")
                                     ->setLastModifiedBy("Nick Traitouros")
                                     ->setTitle("Office 2007 XLSX Test Document")
                                     ->setSubject("Office 2007 XLSX Test Document")
                                     ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
                                     ->setKeywords("office 2007 openxml php")
                                     ->setCategory("Test result file");

        $this->objPHPExcel->setActiveSheetIndex(0);
        $this->objPHPExcel->getActiveSheet()->fromArray($excelHeaders, NULL, "A1");

        foreach($excelRows as $excelRow){
            $counter = isset($counter) ? $counter+1 : 2;
            $this->objPHPExcel->getActiveSheet()->fromArray($excelRow, NULL, "A" . $counter);
        }


    }

    public function export() {

        $this->objPHPExcel->setActiveSheetIndex(0);

        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment;filename=\"opdexport.xls\"");
        header("Cache-Control: max-age=0");
        header("Cache-Control: max-age=1");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
        header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT"); // always modified
        header("Cache-Control: cache, must-revalidate"); // HTTP/1.1
        header("Pragma: public"); // HTTP/1.0

        $objWriter = PHPExcel_IOFactory::createWriter($this->objPHPExcel, "Excel5");
        $objWriter->save("php://output");
        exit;
    }

}