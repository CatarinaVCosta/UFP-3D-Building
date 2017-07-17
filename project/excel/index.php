<?php

include './vendor/autoload.php';


$HOST = "127.0.0.1";
$USERNAME = "root";
$PASSWORD = "12345";
$SCHEMA = "lpi";

$DEBUG = 0;

// setup the DB connection
$conn = mysqli_connect($HOST, $USERNAME, $PASSWORD, $SCHEMA);

if (!$conn) {
    if (DEBUG)
        die("Error: " . mysqli_connect_error());
}

$objPHPExcel = new PHPExcel();
PHPExcel_Settings::setLocale('pt_br');

$objPHPExcel->getProperties()->setCreator("UFP")
        ->setLastModifiedBy("ufp")
        ->setTitle("Annual report")
        ->setSubject("Sales")
        ->setDescription("Annual sales report by John Doe")
        ->setCategory("Finance");

$activeSheet = $objPHPExcel->setActiveSheetIndex(0);


$columnArray = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O");

$queryDate = mysqli_query($conn, "select * from excelSchedules;");
$dayAr = array(1 => 'seg', 2 => 'ter', 3 => 'qua', 4 => 'qui', 5 => 'sex');
$j = 1;
$headerString = "Disc PC Ordem Max Sigla Turma Curso Ano PC Per Grupo Disciplina Tipo Dia(Início-Fim)Sala(Período-Lectivo) Docente(s)";
while ($row = mysqli_fetch_assoc($queryDate)) {
    
    $string = $row['A'] . "§" . $row['B'] . "§" . $row['C'] . "§" . $row['D'] . "§" . $row['E'] . "§" . $row['F']
            . "§" . $row['G'] . "§" . $row['H'] . "§" . $row['I'] . "§" . $row['J'] . "§" . $row['K'] . "§" . $row['L'] . "§". $row['M']
            . "§" .$dayAr[$row['weekday']] . " (" . $row['start_hour'] . " - " . $row['finish_hour'] . ") ".$row['room']." (".$row['start_date']." - ".$row['finish_date'].")"."§". $row['O'];
    //echo $string;
        //$L = $row['L'];
        //$M = $row['M'];
        //$query = mysqli_query($conn, "select * from excelSchedules where L = '$L' and M = '$M';");
        
       // echo $L . " ". $M . " ". mysqli_num_rows($query);
        
       //     if(mysqli_num_rows($query)>=2) {
//                while ($row1 = mysqli_fetch_assoc($query)) {
//                    $aux .= $row1['L'] ." ". $row1['M'].$dayAr[$row1['weekday']] . "(" . $row1['start_hour'] . "-" . $row1['finish_hour'] . ")"
//                            .$row1['room']."(".$row1['start_date']."-".$row1['finish_date'].")"."\n";
//                     echo $aux ."<br>";
//                }
         //   }
    
   // $hs = explode(" ", $headerString);
   // $objPHPExcel->getActiveSheet()->fromArray($hs, null, 'A1');
    
    $arExcel = explode("§", $string);
    $startExcel = 'A' . $j;
    $objPHPExcel->getActiveSheet()->fromArray($arExcel, null, $startExcel);
    $j++;
//            break;
}




/* * foreach ($columnArray as $temp) {
  for ($i = 0; $i < 20; $i++) {
  $colLine = $temp . $i;
  $activeSheet->setCellValue($colLine, rand(0, 10));
  $objPHPExcel->getActiveSheet()->fromArray
  }
  } */

//$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
//$objWriter->save('some_excel_file.xls');

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="some_excel_file.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');

mysqli_close($conn);
