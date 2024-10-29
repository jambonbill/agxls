<?php

require "../vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Set values in cells, e.g., A1
$sheet->setCellValue('A1', 'Hello World!');

// Save as .xlsx
$writer = new Xlsx($spreadsheet);
$writer->save('./newfile.xlsx');

echo "done\n";