<?php

function roomStatus($room) {

    require 'config.php';


    if (!isset($_SESSION['username'])) {
        $value = 4;
        return $value;
    } else {
        $dateNow = date('Y-m-d');
        $hourNow = date("H:i:s", time() - 3600);

        if (isset($_POST['slidertime'])) {
            $hourNow = date("H:i", strtotime($_POST['slidertime']));
        }

        if (isset($_POST['datepicker'])) {
            $var = $_POST['datepicker'];
            $date = str_replace("/", "-", $var);
            $dateNow = date('Y-m-d', strtotime($date));
        }



        $weekdayNr = date('N', strtotime($dateNow));

        $queryAulas = mysqli_query($conn, "select * from excelSchedules where '$dateNow' between start_date and "
                . "finish_date and room = '$room' and weekday=$weekdayNr and '$hourNow' between start_hour and "
                . "finish_hour;");

        $queryReservas = mysqli_query($conn, "select * from reservation where date='$dateNow' and room='$room' and "
                . "validation=1 and '$hourNow'>= start_hour and '$hourNow'<= finish_hour;");



        if (mysqli_num_rows($queryAulas) > 0) {
            $value = 3;
            return $value;
        } else if (mysqli_num_rows($queryReservas) > 0) {
            $value = 3;
            return $value;
        } else {
            $value = 1;
            return $value;
        }
    }
}

function teacher($room) {
    require 'config.php';



//      $query5 = mysqli_query($conn, "select teacherName from user where id=9;");
//            while ($row5 = mysqli_fetch_assoc($query5)) {
//                return ($row5['teacherName']);
//            }



    if (isset($_POST['slidertime'])) {
        $hourNow = date("H:i", strtotime($_POST['slidertime']));
    }

    if (isset($_POST['datepicker'])) {
        $var = $_POST['datepicker'];
        $date = str_replace("/", "-", $var);
        $dateNow = date('Y-m-d', strtotime($date));
    }


    $queryDate = mysqli_query($conn, "select * from excelSchedules where '$dateNow' between start_date and finish_date and room = '$room';");

    $weekdayNr = date('N', strtotime($dateNow));

    if (mysqli_num_rows($queryDate) > 0) {

        $q = "select O from excelSchedules where room='$room' and weekday='$weekdayNr' and '$hourNow' between start_hour and finish_hour;";

        $query = mysqli_query($conn, "select O from excelSchedules where room='$room' and weekday='$weekdayNr' and '$hourNow' between start_hour and finish_hour;");
    }

    if (mysqli_num_rows($query) != 0) {
        $auxID = 0;

        while ($row = mysqli_fetch_assoc($query)) {
            //return $row['O'];

            $query3 = mysqli_query($conn, "select id,toggle, teacherName from user where role=2;");
            while ($row3 = mysqli_fetch_assoc($query3)) {

                if (removeAccents($row3['teacherName']) == removeAccents($row['O'])) {
                    //return removeAccents($row3['teacherName']);
                    $auxID = $row3['id'];
                    //return $auxID;
                }
            }

            if ($auxID == 0)
                return "not available";
            else {
                $query4 = mysqli_query($conn, "select toggle from user where id=$auxID;");
                while ($row4 = mysqli_fetch_assoc($query4)) {
                    if ($row4['toggle'] == 1)
                        return $row['O'];
                    else
                        return "not available";
                }
            }
        }
    }
}

function course($room) {
    require 'config.php';

    if (isset($_POST['slidertime'])) {
        $hourNow = date("H:i", strtotime($_POST['slidertime']));
    }

    if (isset($_POST['datepicker'])) {
        $var = $_POST['datepicker'];
        $date = str_replace("/", "-", $var);
        $dateNow = date('Y-m-d', strtotime($date));
    }


    $weekdayNr = date('N', strtotime($dateNow));
    
           
    $query = mysqli_query($conn, "select * from excelSchedules where '$dateNow' between start_date and "
            . "finish_date and room = '$room' and weekday=$weekdayNr and '$hourNow' between start_hour and "
            . "finish_hour;");
    
     if (mysqli_num_rows($query) == 0)
        return "not available";
    while ($row = mysqli_fetch_assoc($query)) {
        if (mysqli_num_rows($query) != 0) {
            return $row['L'];
        }
    }
}

function classDuration($room) {
    require 'config.php';

    if (isset($_POST['slidertime'])) {
        $hourNow = date("H:i", strtotime($_POST['slidertime']));
    }

    if (isset($_POST['datepicker'])) {
        $var = $_POST['datepicker'];
        $date = str_replace("/", "-", $var);
        $dateNow = date('Y-m-d', strtotime($date));
    }

    $queryDate = mysqli_query($conn, "select * from excelSchedules where '$dateNow' between start_date and finish_date and room = '$room';");

    $weekdayNr = date('N', strtotime($dateNow));

    if (mysqli_num_rows($queryDate) > 0) {

        $query = mysqli_query($conn, "select start_hour,finish_hour from excelSchedules where room='$room' and weekday='$weekdayNr' and '$hourNow' between start_hour and finish_hour;");
    }
    while ($row = mysqli_fetch_assoc($query)) {
        if (mysqli_num_rows($query) != 0) {
            $hour = $row['start_hour'] . " - " . $row['finish_hour'];
            return $hour;
        }
    }
}

function pinInfo() {
    require 'config.php';

    if (!isset($_SESSION['username'])) {
        return "false";
    } else {
        return "true";
    }
}

function videoProjector($room) {
    require 'config.php';

    $query = mysqli_query($conn, "select * from room where number='$room';");

    while ($row = mysqli_fetch_assoc($query)) {
        if ($row['video_projector'] == 1) {
            return true;
        } else {
            return false;
        }
    }
}

function plug($room) {
    require 'config.php';

    $query = mysqli_query($conn, "select * from room where number='$room';");

    while ($row = mysqli_fetch_assoc($query)) {
        if ($row['plug'] == 1) {
            return true;
        } else {
            return false;
        }
    }
}

function architectsTable($room) {
    require 'config.php';

    $query = mysqli_query($conn, "select * from room where number='$room';");

    while ($row = mysqli_fetch_assoc($query)) {
        if ($row['architects_table'] == 1) {
            return true;
        } else {
            return false;
        }
    }
}

function capacity($room) {
    require 'config.php';

    $query = mysqli_query($conn, "select * from room where number='$room';");

    while ($row = mysqli_fetch_assoc($query)) {
        return $row['capacity'];
    }
}

function removeAccents($string) {
    return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', preg_replace('~&([a-z]{1,2})(acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8'))), ' '));
}

//function teacher($room) {
//    require 'config.php';
//
//    $dateNow = date('Y-m-d');
//    $hourNow = date("H:i:s", time() - 3600);
//
//    $queryDate = mysqli_query($conn, "select * from excelSchedules where '$dateNow' between start_date and finish_date and room = '$room';");
//
//    $weekdayNr = date('N', strtotime($dateNow));
//
//    if (mysqli_num_rows($queryDate) > 0) {
//
//        $query = mysqli_query($conn, "select O from excelSchedules where room='$room' and weekday='$weekdayNr' and '$hourNow' between start_hour and finish_hour;");
//    }
//    while ($row = mysqli_fetch_assoc($query)) {
//        if (mysqli_num_rows($query) != 0) {
//            return $row['O'];
//        }
//    }
//}
//
//function course($room){
//    require 'config.php';
//
//    $dateNow = date('Y-m-d');
//    $hourNow = date("H:i:s", time() - 3600);
//
//    $queryDate = mysqli_query($conn, "select * from excelSchedules where '$dateNow' between start_date and finish_date and room = '$room';");
//
//    $weekdayNr = date('N', strtotime($dateNow));
//
//    if (mysqli_num_rows($queryDate) > 0) {
//
//        $query = mysqli_query($conn, "select L from excelSchedules where room='$room' and weekday='$weekdayNr' and '$hourNow' between start_hour and finish_hour;");
//    }
//    while ($row = mysqli_fetch_assoc($query)) {
//        if (mysqli_num_rows($query) != 0) {
//            return $row['L'];
//        }
//    }
//}
//
//function classDuration($room){
//    require 'config.php';
//
//    $dateNow = date('Y-m-d');
//    $hourNow = date("H:i:s", time() - 3600);
//
//    $queryDate = mysqli_query($conn, "select * from excelSchedules where '$dateNow' between start_date and finish_date and room = '$room';");
//
//    $weekdayNr = date('N', strtotime($dateNow));
//
//    if (mysqli_num_rows($queryDate) > 0) {
//
//        $query = mysqli_query($conn, "select start_hour,finish_hour from excelSchedules where room='$room' and weekday='$weekdayNr' and '$hourNow' between start_hour and finish_hour;");
//    }
//    while ($row = mysqli_fetch_assoc($query)) {
//        if (mysqli_num_rows($query) != 0) {
//            $hour = $row['start_hour']." - ".$row['finish_hour'];
//            return $hour;
//        }
//    }
//}



    