<?php

require "../vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

$filePath = './xlsx/clubs.xlsx';
$spreadsheet = IOFactory::load($filePath);
$sheet = $spreadsheet->getActiveSheet();



$columnNames = [];
$highestColumn = $sheet->getHighestColumn(); // Get the last column letter
$highestColumnIndex = Coordinate::columnIndexFromString($highestColumn); // Convert letter to index

// Loop through each column in the first row
for ($col = 1; $col <= $highestColumnIndex; $col++) {
    $columnLetter = Coordinate::stringFromColumnIndex($col); // Convert index to letter
    $columnNames[] = $sheet->getCell($columnLetter . '1')->getValue(); // Get value in the first row
}

// Output all column names
print_r($columnNames);