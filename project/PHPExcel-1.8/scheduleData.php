
<?php

//  Include PHPExcel_IOFactory
include './Classes/PHPExcel/IOFactory.php';


$filePath = realpath($_FILES["file"]["tmp_name"]);
$inputFileName = $filePath . "/" . $_FILES[fileToUpload][name];


$conn = mysqli_connect("127.0.0.1", "root", "12345", "lpi");
mysqli_set_charset('utf8');
mysqli_query($conn, "delete excelSchedules where id >0;");


//  Read your Excel workbook
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch (Exception $e) {
    die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
}


//  Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(0);
$highestRow = $sheet->getHighestRow();
$highestColumn = $sheet->getHighestColumn();


//  Loop through each row of the worksheet in turn
for ($row = 1; $row <= $highestRow; $row++) {

    //  Read a row of data into an array
    $rowData = $sheet->rangeToArray('A' . $row . ':' . 'O' . $row, NULL, TRUE, FALSE);
    //print_r($rowData);
    //  Insert row data array into database here using your own structure
    if ($rowData[0][0] == "") {
        continue;
    }
    $value0 = $rowData[0][0];
    $value1 = $rowData[0][1];
    $value2 = $rowData[0][2];
    $value3 = $rowData[0][3];
    $value4 = $rowData[0][4];
    $value5 = $rowData[0][5];
    $value6 = $rowData[0][6];
    $value7 = $rowData[0][7];
    $value8 = $rowData[0][8];
    $value9 = $rowData[0][9];
    $value10 = $rowData[0][10];
    $value11 = $rowData[0][11];
    $value12 = $rowData[0][12];
    $value13 = $rowData[0][13];
    $value14 = $rowData[0][14];

    $diasSemana = array(0 => 'dom', 1 => 'seg', 2 => 'ter', 3 => 'qua', 4 => 'qui', 5 => 'sex', 6 => 'sab');

    $b = explode("\n", $value13);
    for ($i = 0; $i <= sizeof($b); $i++) {

        $c = explode(" ", $b[$i]);

        $startHour = substr($c[1], 1);
        $finishHour = substr($c[3], 0, -1);
        $weekDay = array_search($c[0], $diasSemana);
        $roomNumber = $c[4];
        $startDate = substr($c[5], 1);
        $finishDate = substr($c[7], 0, -1);

        if ($weekDay == "") {
            continue;
        }
        $sql = "insert into excelSchedules (A,B,C,D,E,F,G,H,I,J,K,L,M,O,weekday,start_hour,finish_hour,room,start_date,finish_date) values ('$value0','$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9','$value10','$value11','$value12','$value14',$weekDay,'$startHour','$finishHour','$roomNumber','$startDate','$finishDate');";
        mysqli_query($conn, $sql);
        //echo $sql ."</br>";
    }
}
header('location:../map/index.php');
mysqli_close($conn);


//$querySchedule = "select N from excel";
//$sql_schedule = mysqli_query($conn, $querySchedule);
//
//$diasSemana = array(0 => 'dom', 1 => 'seg', 2 => 'ter', 3 => 'qua', 4 => 'qui', 5 => 'sex', 6 => 'sab');
//
//while ($row = mysqli_fetch_assoc($sql_schedule)) {
//    $b = explode("\n", $row['N']);
//    for ($i = 0; $i <= sizeof($b); $i++) {
//
//        $c = explode(" ", $b[$i]);
//
//        $startHour = substr($c[1], 1);
//        $finishHour = substr($c[3], 0, -1);
//        $weekDay = array_search($c[0], $diasSemana);
//        $roomNumber = $c[4];
//        $startDate = substr($c[5], 1);
//        $finishDate = substr($c[7], 0, -1);
//
//
//
//        if ($weekDay == "") {
//            continue;
//        }
//        $sql_query = mysqli_query($conn, "select id from room where number ='" . $roomNumber . "';");
//
//        if (mysqli_num_rows($sql_query) == 0) {
//            continue;
//        }
//
//        while ($dbrow = mysqli_fetch_assoc($sql_query)) {
//            $room_id = $dbrow['id'];
//        }
//
//        $sqli = "insert into schedule(roomid,start_hour,finish_hour,weekday,start_date,finish_date) values($room_id,'$startHour','$finishHour','$weekDay','$startDate','$finishDate');";
//        mysqli_query($conn, $sqli);
//    }
//}
//
//
//
//mysqli_close($conn);
