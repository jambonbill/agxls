<?php

require "../vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\IOFactory;

$filePath = './file.xlsx';
$spreadsheet = IOFactory::load($filePath);
$sheet = $spreadsheet->getActiveSheet();

// Access cell values, e.g., A1
$value = $sheet->getCell('A1')->getValue();

echo 'A1='.$value;