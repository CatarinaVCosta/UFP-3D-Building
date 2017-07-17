<?php

use PHPExcel;

include './Classes/PHPExcel/IOFactory.php';
$conn = mysqli_connect("127.0.0.1", "root", "12345.Luis", "horarios");

$query = "select * from excel";
$sql_result = mysqli_query($conn, $query);


$objPHPExcel = new PHPExcel();

// Set the active Excel worksheet to sheet 0
$objPHPExcel->setActiveSheetIndex(0);
// Initialise the Excel row number
$rowCount = 1;


while ($row = mysqli_fetch_assoc($sql_result)) {
    $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $row['A']);
    $rowCount++;
}

$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
echo "lalalala";
// Write the Excel file to filename some_excel_file.xlsx in the current directory
$objWriter->save('/home/luis/Desktop/file.xlsx');

mysqli_close($conn);
