<?php
require '../map/config.php';

$queryRole = "select role from user where username='" . $_SESSION['username'] . "';";
$sqlRole = mysqli_query($conn, $queryRole);

while ($row = mysqli_fetch_assoc($sqlRole)) {
    $userRole = $row['role'];
    //$toggle = $row['show'];
}
if($userRole!=1){
    session_unset();
    header('location:../../loginsignin/signinLogin.php');
}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#date").datepicker();
            });

//            $('.timepicker').wickedpicker();

        </script>
    </head>
    <body>
        <form method="POST">
            <br>Capacity: <input type="text" name="capacity" value="" id="capacity"/>

            <br><br>Date: <input type="text" name="date" id="date">

            <br><br>Start Hour: <input type="time" name="start" id="start"/>

            <br><br>Duration (min): <select name="duration" id="duration">
                <option>15</option>
                <option>30</option>
                <option>45</option>
                <option>60</option>
                <option>75</option>
                <option>90</option>
                <option>105</option>
                <option>120</option>
            </select>




            <br><br>Video Projector: <input type="radio" name="projector" value="" id="projector"/>
            <br>Plug: <input type="radio" name="plug" value="" id="plug"/>
            <br>Architect's table: <input type="radio" name="table" value="" id="table"/>

            <br><input type="submit" value="submit" name="submit"/>
        </form>

        <?php
        if (isset($_POST['submit'])) {

//                date("G:i", strtotime($time));
            $array = array();
            $date = date('Y/m/d', strtotime($_POST['date']));

            $startHour = strtotime($_POST['start']);
            $duration = (($_POST['duration']) * 60); // 15 minutes
            $finishHour = strftime('%X', $startHour + $duration);
//                echo "<br><br>hora fim: " . $finisHour;

            $weekday = date("w", strtotime($_POST['date']));

            echo $query = "select distinct room from excelSchedules where weekday = $weekday and (date('$date') between date(start_date) and date(finish_date)) and room not in (select distinct es.room from excelSchedules es where es.weekday = $weekday and (date('$date') between date(es.start_date) and date(es.finish_date)) 
and ('" . $_POST['start'] . "' between es.start_hour and es.finish_hour) and ('$finishHour' between es.start_hour and es.finish_hour)) order by room;";

            $result = mysqli_query($conn, $query);

            // echo "<br><br>rows = " . mysqli_num_rows($result) . "<br><br>";

            while ($row = mysqli_fetch_assoc($result)) {

                if ($row['room'] == 'A1' || $row['room'] == 'A2' || ($row['room'][0] == '1' && ($row['room'][1] == '0' || $row['room'][1] == '1')) || ($row['room'][0] == '2' && ($row['room'][1] == '0' || $row['room'][1] == '1')) || ($row['room'][0] == '3' && ($row['room'][1] == '0' || $row['room'][1] == '1'))) {

                    $array[] = $row['room'];
                }
            }

            echo "<br><br>Array ANTES do capacity: ";
            print_r($array);

            if (($_POST['capacity']) != "") {
                $arrAux = $array;

                $array = array();

                for ($i = 0; $i < sizeof($arrAux); $i++) {
                    $roomCapacity = "select distinct number from room where number = '" . $arrAux[$i] . "' and capacity >= " . $_POST['capacity'] . ";";

                    $capacity = mysqli_query($conn, $roomCapacity);

                    while ($row2 = mysqli_fetch_assoc($capacity)) {

                        $array[] = $row2['number'];
                    }
                }
            }
            if (isset($_POST['projector'])) {
                $arrAux1 = $array;

                $array = array();

                for ($i = 0; $i < sizeof($arrAux1); $i++) {
                    $projector = mysqli_query($conn, "select distinct number from room where number = '" . $arrAux1[$i] . "' and video_projector = 1;");

                    while ($row3 = mysqli_fetch_assoc($projector)) {

                        $array[] = $row3['number'];
                    }
                }
            }

            if (isset($_POST['plug'])) {
                $arrAux2 = $array;

                $array = array();

                for ($i = 0; $i < sizeof($arrAux2); $i++) {
                    $plug = mysqli_query($conn, "select distinct number from room where number = '" . $arrAux2[$i] . "' and plug = 1;");

                    while ($row4 = mysqli_fetch_assoc($plug)) {

                        $array[] = $row4['number'];
                    }
                }
            }

            if (isset($_POST['table'])) {
                $arrAux3 = $array;

                $array = array();

                for ($i = 0; $i < sizeof($arrAux3); $i++) {
                    $table = mysqli_query($conn, "select distinct number from room where number = '" . $arrAux3[$i] . "' and architects_table = 1;");

                    while ($row5 = mysqli_fetch_assoc($table)) {

                        $array[] = $row5['number'];
                    }
                }
            }

            echo "<br><br>Array DEPOIS do capacity: ";
            print_r($array);
        }
        ?>

                <!--        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
                        <script type="text/javascript" src="wickedpicker.js"></script>-->
    </body>
</html>
<?php
mysqli_close($conn);

