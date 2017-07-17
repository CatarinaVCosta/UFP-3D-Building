<?php
require '../map/config.php';

session_start();

//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if (!isset($_SESSION['username']) and ! isset($_SESSION['password'])) {
//Destrói
    session_destroy();

//Limpa
    unset($_SESSION['username']);
    unset($_SESSION['password']);

//Redireciona para a página de autenticação
    header('location:../loginsignin/signinLogin.php');
}


$conn = mysqli_connect("127.0.0.1", "root", "12345", "lpi");

if (!$conn) {

    die("Error: " . mysqli_connect_error());
}

$username = $_SESSION['username'];

$query = mysqli_query($conn, "select * from user where username='$username';");

while ($row = mysqli_fetch_assoc($query)) {
    $user_id = $row['id'];
}
?>

<!DOCTYPE html>

<html>
    <head>

        <meta charset="UTF-8">
        <title>Exemplo Form</title>
        <link href="normalize.min.css" rel="stylesheet" />
        <link href="style.css" rel="stylesheet" />
            <!--<script src="./js/cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>



        <link rel="stylesheet prefetch" href="../map/js/ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
        <script src="../map/js/ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <header>

            <?php
            if (isset($_POST['reservaSubmit'])) {

                $start = strtotime($_POST['start']);
                $dur = (($_POST['duration']) * 60);
                $finish_hour = strftime('%X', $start + $dur);

                $starHour = $_POST['start'];
                $selectedDate = $_POST['date'];
                $sala = $_POST['room'];

                $query = "insert into reservation (user_id,start_hour,finish_hour,date,room,validation,request) values($user_id,'$starHour','$finish_hour','$selectedDate','$sala',0,CURDATE());";
                $insert = mysqli_query($conn, $query);
            }
            ?>

        </header>
        <aside>
            <div class="searchWraper">
                <a href="../map/index.php">
                    <input type="submit" class="search__input" value="Back to Homepage" style="color:white;">
                </a>
            </div>
            <div class="navBody">
                <span class="titulo">Reservation</span>
                <div class="optFiltros">
                    <form id="fForm" method="post" class="opts" name="optsFiltros" ></form>
                    <div class="tab group">
                        <input id="capacidade" class="toggle" type="checkbox"/>
                        <label for="capacidade" class="label name">
                            capacity
                        </label>
                        <div class="tabContent">
                            <div class="formWraper">
                                <span class="qtd name">alunos:</span>
                                <input type="text" name="qtd" value=<?php echo isset($_POST["submit"]) ? $_POST["qtd"] : "0"; ?> class="qtd" maxlength="3" placeholder="0" form="fForm"/>
                                <input type="submit" name="alterar" class="btn qtd alterar" style="display:none;" form="fForm"/>
                                <div class="qtdWraper">
                                    <span class="btn qtd Plus">+</span>
                                    <span class="btn qtd Minus">-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab group">
                        <input id="sala" class="toggle" type="checkbox" />
                        <label for="sala" class="label name">
                            room
                        </label>
                        <div class="tabContent">
                            <div class="formWraper">
                                <div class="checkWraper">
                                    <input class="check" name="plug" type="checkbox" id="plug" form="fForm"/>
                                    <span class="name">plug</span>
                                </div> 
                                <div class="checkWraper">
                                    <input class="check" name="projector" type="checkbox" id="projector" form="fForm"/>
                                    <span class="name">video projector</span>
                                </div>
                                <div class="checkWraper">
                                    <input class="check" name="table" type="checkbox" id="table" form="fForm"/>
                                    <span class="name">architect's table</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab group">
                        <input id="schedule" class="toggle" type="checkbox" checked/>
                        <label for="schedule" class="label name">
                            schedule
                        </label>
                        <div class="tabContent">
                            <div class="formWraper">
                                <div class="optionWraper">
                                    <span class="qtd name">Date:</span>
                                    <input type="date" name="date" id="date" form="fForm" <?php echo isset($_POST["submit"]) ? "value='" . $_POST["date"] . "'" : ""; ?>>
                                </div>
                                <div class="optionWraper">
                                    <span class="qtd name">Start Hour:</span>
                                    <input type="time" name="start" id="start" form="fForm" <?php echo isset($_POST["submit"]) ? "value='" . $_POST["start"] . "'" : ""; ?>/>
                                </div>
                                <div class="optionWraper">
                                    <span class="qtd name">Duration:</span>
                                    <select name="duration" id="duration" form="fForm">
                                        <?php for ($i = 15; $i <= 120; $i += 15) { ?>
                                            <option <?php echo isset($_POST["submit"]) && $_POST["duration"] == $i ? "selected" : ""; ?> > <?php echo $i; ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="submit" name="submit" form="fForm"/>
                </div>
            </div>
        </aside>
        <main>

            <div class="wraper">
                <?php
                if (isset($_POST['submit'])) {

                    $capacity = mysqli_real_escape_string($conn, $_POST['qtd']);
                    $projector = $_POST['projector'];
                    $plug = $_POST['plug'];
                    $table = $_POST['table'];

                    $start = $_POST['start'];
                    $data = $_POST['date'];
                    $dur = $_POST['duration'];

                    $rooms = array("A1", "A2", "101", "102", "103", "104", "105", "106", "107", "108", "109", "110", "111", "201", "202", "203", "204", "205", "206", "207", "208", "209", "210", "211", "212", "213", "214", "301", "302", "303", "304", "305", "306", "308", "309", "310");
                    $auxRoom = array();
                    $auxProjector = array();
                    $auxPlug = array();
                    $auxTable = array();

                    $date = date('Y/m/d', strtotime($data));

                    $startHour = strtotime($start);
                    $duration = ($dur * 60);
                    $finishHour = strftime('%X', $startHour + $duration);
                    $media = strftime('%X', $startHour + ($duration / 2));

                    $weekday = date("w", strtotime($data));

                    $query = "select distinct excelSchedules.room, room.capacity, room.plug, room.video_projector, room.architects_table from excelSchedules, room where excelSchedules.room = room.number and (date('$date') between date(start_date) and date(finish_date)) and  weekday=$weekday  and not (((CAST('$start' AS TIME) BETWEEN start_hour and finish_hour ) OR (CAST('$finishHour' AS TIME) BETWEEN start_hour and finish_hour ) OR (CAST('$media' AS TIME) BETWEEN start_hour and finish_hour)));";

                    echo $query;

                    $result = mysqli_query($conn, $query);


                    while ($row = mysqli_fetch_assoc($result)) {

                        $auxRoom[] = $row['room'];

                        if (isset($projector) && $row['capacity'] >= $capacity) {

                            if ($row['video_projector'] == 1) {
                                $auxProjector[] = $row['room'];
                            }
                        } else if (!isset($projector) && $row['capacity'] >= $capacity) {

                            if ($row['video_projector'] == 0 || $row['video_projector'] == 1) {
                                $auxProjector[] = $row['room'];
                            }
                        }

                        if (isset($plug) && $row['capacity'] >= $capacity) {

                            if ($row['plug'] == 1) {
                                $auxPlug[] = $row['room'];
                            }
                        } else if (!isset($plug) && $row['capacity'] >= $capacity) {

                            if ($row['plug'] == 0 || $row['plug'] == 1) {
                                $auxPlug[] = $row['room'];
                            }
                        }

                        if (isset($table) && $row['capacity'] >= $capacity) {

                            if ($row['architects_table'] == 1) {
                                $auxTable[] = $row['room'];
                            }
                        } else if (!isset($table) && $row['capacity'] >= $capacity) {

                            if ($row['architects_table'] == 0 || $row['architects_table'] == 1) {
                                $auxTable[] = $row['room'];
                            }
                        }
                    }

                    $roomResult = array_intersect($rooms, $auxRoom);
                    $roomResult2 = array_intersect($roomResult, $auxProjector);
                    $roomResult3 = array_intersect($roomResult2, $auxPlug);
                    $roomResult4 = array_intersect($roomResult3, $auxTable);
                }

                print_r($roomResult4);
                $roomResult4 = array_values($roomResult4);
                //print_r($auxPlug);
                $dateNow = date("Y-m-d");
                $checkReservation = "select * from reservation where user_id = $user_id and date = '$data';";
                $sameDay = mysqli_query($conn, $checkReservation);

                if (mysqli_num_rows($sameDay) != 0) {
                    ?> 

                    <div class="alert">

                        <span class="closebtn" onclick="location.href = '../map/index.php';">&times</span> 
                        <span class="closebtn2"> You can't make more than 1 reservation for the same day! </span>

                    </div>

                    <?php
                } else {

                    $checkReservation = "select * from reservation where user_id = $user_id and DATE_SUB(CURDATE(),INTERVAL 7 DAY) <= request;";
                    $lastDays = mysqli_query($conn, $checkReservation);
                    if (mysqli_num_rows($lastDays) > 2) {
                        ?> 
                        <div class="alert">
                            <span class="closebtn" onclick="location.href = '../map/index.php';">&times</span> 
                            <span class="closebtn2"> You can't make more than 3 reservations per week! </span>
                        </div>
                        <?php
                    } else {


                        for ($i = 0; $i < sizeof($roomResult4); $i++) {
                            ?>
                            <div class="TabContent">
                                <div class="top">
                                    <div class="dentro">
                                        <div class="dentro-dentro">
                                            <h2><?php echo $roomResult4[$i]; ?></h2>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="auditorio.png" alt="classroom" width="250" height="150">
                                    </div>
                                </div>
                                <div class="bottom">
                                    <div class="bottom-dentro">
                                        <?php
                                        $roomInfo = mysqli_query($conn, "select * from room where number='" . $roomResult4[$i] . "';");

                                        while ($row2 = mysqli_fetch_assoc($roomInfo)) {
                                            ?>
                                            <div class="imageContent">
                                                <span class="qtd name">Capacity:</span>
                                                <span class="qtd result"><?php echo $row2['capacity']; ?></span>
                                            </div>
                                            <div class="imageContent">
                                                <span class="qtd name">Plug:</span>
                                                <span class="qtd result"><?php echo ($row2['plug'] == 0 ? "No" : "Yes"); ?></span>
                                            </div>
                                            <div class="imageContent">
                                                <span class="qtd name">Video Projector:</span>
                                                <span class="qtd result"><?php echo ($row2['video_projector'] == 0 ? "No" : "Yes"); ?></span>
                                            </div>
                                            <div class="imageContent">
                                                <span class="qtd name">Architect's Table:</span>
                                                <span class="qtd result"><?php echo ($row2['architects_table'] == 0 ? "No" : "Yes"); ?></span>
                                            </div>
                                            <div class="imageContent">
                                                <span class="qtd name">Floor:</span>
                                                <span class="qtd result"><?php echo $row2['floor']; ?></span>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                }
                ?>

            </div>
        </main>

        <footer>
        </footer>

        <script type="text/javascript" src="script.js" ></script>
    </body>
</html>
<?php
mysqli_close($conn);
