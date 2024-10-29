<?php

require "../vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\IOFactory;

$filePath = './xlsx/clubs.xlsx';
$spreadsheet = IOFactory::load($filePath);
$sheet = $spreadsheet->getActiveSheet();

$ids = [];
$highestRow = $sheet->getHighestRow(); // Get the last row in the sheet

// Loop through each row in column B (column index 2)
for ($row = 1; $row <= $highestRow; $row++) {
    $id = $sheet->getCell("B{$row}")->getValue(); // Access cell in column B, current row
    if ($id !== null) { // Check if the cell is not empty
        $ids[] = $id;
    }
}

// Output all IDs
print_r($ids);