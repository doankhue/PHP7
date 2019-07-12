<?php 


require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$arrayData = [
    ['User', 'Email', 'Crytocurencies', 'Amount', 'Times Send'],
    ['Daisy',  'daisy@gmail.com',   'BitCoin', 2000, 200],
];
$spreadsheet->getActiveSheet()
    ->fromArray(
        $arrayData,  // The data to set
        NULL,        // Array values with this value will not be set
        'A1'         // Top left coordinate of the worksheet range where
                     //    we want to set these values (default is A1)
    );
$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');