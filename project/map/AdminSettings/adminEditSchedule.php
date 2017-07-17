<?php
require '../config.php';
session_start();

$queryRole = "select role from user where username='" . $_SESSION['username'] . "';";
$sqlRole = mysqli_query($conn, $queryRole);

while ($row = mysqli_fetch_assoc($sqlRole)) {
    $userRole = $row['role'];
}
if ($userRole != 1) {
    session_unset();
    header('location:../../loginsignin/signinLogin.php');
}
?>
<!DOCTYPE html>

<html>
    <head>  

        <meta charset="UTF-8">
        <title>Edit Schedule</title>
        <link href="normalize.min.css" rel="stylesheet" />
        <link href="style.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!--        
                <script>
                    $(function() {
                        $("#date").datepicker();
                    });
                
                
                </script>-->

    </head>
    <body>
        <header>
        </header>
        <aside>

            <div class="searchWraper"><span class="btn big search">Edit Schedule</span></div>
            <?php if (!isset($_GET['edit'])) { ?>
                <div class="navBody">
                    <div class="optFiltros">

                        <input type="button" value="Back to Homepage" accept=""onclick="window.location = '../index.php';" />       

                        <form id="fForm" method="post" class="opts" name="optsFiltros"></form>

                        <div class="tab group">
                            <input id="User" class="toggle" type="checkbox" />
                            <label for="User" class="label name">
                                Teachers
                            </label>


                            <div class="tabContent">
                                <form  id = 'formid' method="POST">
                                    <div class ="dropwraper2">
                                        <select id = 'teachersName' name = "teachersName">
                                            <?php
                                            $query = mysqli_query($conn, "select distinct O from excelSchedules order by O;");

                                            while ($row = mysqli_fetch_assoc($query)) {
                                                $fname = $row['O'];

                                                if (strpos($fname, "\n") === false) {
                                                    echo " <option> $fname </option> ";
                                                }
                                            }
                                            ?>

                                        </select>
                                    </div>
                            </div>
                        </div>

                        <div class="tab group">
                            <input id="Subject" class="toggle" type="checkbox" />
                            <label for="Subject" class="label name">
                                Subjects
                            </label>


                            <div class="tabContent">

                                <div class="dropwraper2">
                                    <select id = 'subjectName' name = "subjectName">
                                        <?php
                                        echo "<option></option>";
                                        $auxSub = array();
                                        $query = mysqli_query($conn, "select * from excelSchedules order by L;");
                                        while ($row = mysqli_fetch_assoc($query)) {
                                            $fsub = $row['L'];

                                            if (!in_array($fsub, $auxSub)) {
                                                $auxSub[] = $fsub;
                                                echo " <option> $fsub </option> ";
                                            }
                                        }
                                        ?>

                                    </select>
                                </div></div>
                        </div>
                        <div class="tab group">
                            <input id="sHour" class="toggle" type="checkbox" />
                            <label for="sHour" class="label name">
                                time/Day
                            </label>


                            <div class="tabContent">
                                <div class="input-field col s12"><br>
                                    <label for="timepicker">Start Hour:</label>
                                    <input name ='hour' id="timepicker" data-default="14:20:00" class="timepicker" type="time">
                                </div><br>
                                Day <input type="date" size='15' value ='' name="day">

                            </div>
                        </div>

                        <div class="tab group">
                            <input id="room" class="toggle" type="checkbox" />
                            <label for="room" class="label name">
                                Room
                            </label>
                            <div class="tabContent">
                                <div class="dropwraper2">
                                    <select id = 'room' name = "room">
                                        <?php
                                        $query = mysqli_query($conn, "select * from room order by number;");
                                        echo"<option></option>";
                                        while ($row = mysqli_fetch_assoc($query)) {

                                            echo " <option>" . $row['number'] . "</option> ";
                                        }
                                        ?>

                                    </select>

                                </div></div>
                        </div>

                        <input type="submit" value="Search" name="search" />
                        <input type="button" value="Add class" accept="" onclick="window.location = 'addClass.php';" />       
                        <!--                    <a href="addClass.php" class = "button">Add a class</a>-->

                        </form>
                    </div>
                </div> <?php } else { ?>
                <div class="optFiltros">

                    <input type="button" value="Back to Edit Schedule" accept=""onclick="window.location = 'adminEditSchedule.php';" /> 
                </div>
                <div class="optFiltros">

                    <input type="button" value="Back to Homepage" accept=""onclick="window.location = '../index.php';" /> 
                </div>
            <?php } ?>
            <div class="container_edit_room">
                <form action="adminEditRoom.php">
                    <input type="submit" class="search__input" value="Edit Room" style="color: white; margin-top:10px;">
                </form>
            </div>
            <div class="container_edit_user">
                <form action="adminEditUser.php">
                    <input type="submit" class="search__input" value="Edit User" style="color: white; margin-top:10px;">
                </form>
            </div>


            <div class="container_current_user">
                <div class="panel" style="display:none">
                    <a href='adminSettings.php'>
                        <input type='submit' class='search__input' value="Change Password" style="color: white; text-align: left;">
                    </a>
                    <a href='adminSettings.php'>
                        <input type='submit' class='search__input' value='Validate Reservations' style='color: white; text-align: left;'>
                    </a>
                    <a href='../logout.php'>
                        <input type='submit' class='search__input' value='Logout' style='color: white; text-align: left;'>
                    </a>
                </div>
                <input type="submit" class="search__input bottom_accordion" style="color: white; text-align: left;" value="<?php
                echo $_SESSION['username'];
                ?>"/>
            </div>
            <script>
                var acc = document.getElementsByClassName("bottom_accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].onclick = function () {
                        this.classList.toggle("active");
                        var panel = this.previousElementSibling;
                        if (panel.style.display === "block") {
                            panel.style.display = "none";
                        } else {
                            panel.style.display = "block";
                        }
                    };
                }
            </script>
        </aside>
        <main>
            <?php
            $queryString = "select * from excelSchedules where";


            if (isset($_POST['search'])) {

                $teachers = mysqli_real_escape_string($conn, $_POST['teachersName']);
                $subjects = mysqli_real_escape_string($conn, $_POST['subjectName']);
                $hour = mysqli_real_escape_string($conn, $_POST['hour']);
                $day = mysqli_real_escape_string($conn, $_POST['day']);
                $fRoom = mysqli_real_escape_string($conn, $_POST['room']);


                if ($teachers != "") {
                    $arrayQuery = explode(" ", $queryString);
                    if ($arrayQuery[count($arrayQuery) - 1] == 'where') {
                        $queryString .= " O like '%$teachers%'";
                    } else
                        $queryString .= " and O like '%$teachers%'";
                }

                if ($subjects != "") {
                    $arrayQuery = explode(" ", $queryString);
                    if ($arrayQuery[count($arrayQuery) - 1] == 'where') {
                        $queryString .= " L = '$subjects'";
                    } else
                        $queryString .= " and L = '$subjects'";
                }

                if ($hour != "") {
                    $arrayQuery = explode(" ", $queryString);
                    if ($arrayQuery[count($arrayQuery) - 1] == 'where') {
                        $queryString .= " start_hour = '$hour'";
                    } else
                        $queryString .= " and start_hour = '$hour'";
                }

                if ($day != "") {
                    $wkd = date("w", strtotime($day));
                    $arrayQuery = explode(" ", $queryString);
                    if ($arrayQuery[count($arrayQuery) - 1] == 'where') {
                        $queryString .= " '$day' between start_date and finish_date and weekday=$wkd";
                    } else
                        $queryString .= " and '$day' between start_date and finish_date and weekday=$wkd";
                }

                if ($fRoom != "") {
                    $arrayQuery = explode(" ", $queryString);
                    if ($arrayQuery[count($arrayQuery) - 1] == 'where') {
                        $queryString .= " room = '$fRoom'";
                    } else
                        $queryString .= " and room = '$fRoom'";
                }

                $queryString .= ";";
                $query = mysqli_query($conn, $queryString);

                if (!isset($_GET['edit'])) {
                    $diasSemana = array(0 => 'dom', 1 => 'seg', 2 => 'ter', 3 => 'qua', 4 => 'qui', 5 => 'sex', 6 => 'sab');
                    ?><form method="POST"> 
                        <div id="table-wrapper">
                            <div id="table-scroll">
                                <?php
                                echo "<table border=1><tr><th class='col-md-1'>Turma</th><th class='col-md-1'>Curso</th><th class='col-md-1'>Per</th><th class='col-md-1'>Grupo</th><th class='col-md-1'>Disciplina</th><th class='col-md-1'>Tipo</th><th class='col-md-1'>Weekday</th><th class='col-md-1'>Start Hour</th><th class='col-md-1'>Finish Hour</th><th class='col-md-1'>Room</th><th class='col-md-1'>Start Date</th><th class='col-md-1'>Finish Date</th><th class='col-md-1'>Docentes</th><th class='col-md-1'> <input type = 'submit' value = 'Remove' name='Remove' /></th></tr>";
                                while ($row = mysqli_fetch_assoc($query)) {

                                    echo "<tr>";
                                    // echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['A'] . "</td>";
                                    // echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['B'] . "</td>";
                                    // echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['C'] . "</td>";
                                    // echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['D'] . "</td>";
                                    // echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['E'] . "</td>";
                                    echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['F'] . "</td>";
                                    echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['G'] . "</td>";
                                    // echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['H'] . "</td>";
                                    // echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['I'] . "</td>";
                                    echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['J'] . "</td>";
                                    echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['K'] . "</td>";
                                    echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['L'] . "</td>";
                                    echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['M'] . "</td>";
                                    echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $diasSemana[$row['weekday']] . "</td>";
                                    echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['start_hour'] . "</td>";
                                    echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['finish_hour'] . "</td>";
                                    echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['room'] . "</td>";
                                    echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['start_date'] . "</td>";
                                    echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['finish_date'] . "</td>";
                                    echo "<td class = 'clickable-row' data-href='adminEditSchedule.php?edit=" . $row['id'] . "' style='cursor: pointer;' class='col-md-1'>" . $row['O'] . "</td>";

                                    echo "<td class='col-md-1'>";
                                    ?>

                                    <div class="remove">
                                        <input name='checkRemove[]' value="<?php echo $row['id']; ?>" type="checkbox" />
                                    </div> 

                                    <?php
                                    echo "</td>";

                                    echo"</tr>";
                                }
                                echo "</table>";
                            }
                            ?> </div></div> </form> <?php
            }
            if (isset($_POST['Remove'])) {

                foreach ($_POST['checkRemove'] as $key => $value) {

                    $query = mysqli_query($conn, "delete from excelSchedules where id = $value");
                }
            }

            //print_r($delIds);
            if (isset($_GET['edit'])) {
                $query = mysqli_query($conn, "select * from excelSchedules;");
                $diasSemana = array(0 => 'dom', 1 => 'seg', 2 => 'ter', 3 => 'qua', 4 => 'qui', 5 => 'sex', 6 => 'sab');

                while ($row = mysqli_fetch_assoc($query)) {
                    if ($_GET['edit'] == $row['id']) {
                        ?>
                        <div class="optFiltrosed">
                            <div class ="editAdd">
                                <form action = "scheduleEdit.php" method="POST">
                                    <div class="row">
                                        <div class ="formBuild">
                                            <div class="row1">
                                                <div>
                                                    <label>Disciplina</label>
                                                    <input type='text' name='l' value="<?php echo $row['L'] ?>">
                                                </div>
                                                <div>
                                                    <label>Start Date</label>
                                                    <input type ="date" class='datapicker' name ='Sdate' value="<?php echo $row['start_date']; ?>">

                                                </div>

                                            </div>


                                            <div class="row1">
                                                <div>
                                                    <label>Teacher</label>
                                                    <input type='text' name='o' size='15' value="<?php echo $row['O'] ?>">

                                                </div>
                                                <div>
                                                    <label>Finish Date</label>
                                                    <input type ="date" class='datapicker' name ='Fdate' value="<?php echo $row['finish_date']; ?>">


                                                </div>
                                            </div>
                                            <div class="row2">
                                                <div>
                                                    <label>Room</label>
                                                    <input type='text' name='room' size='3' value="<?php echo $row['room'] ?>">

                                                </div>
                                                <div>
                                                    <label>Start Hour</label>
                                                    <input name ='Shour' value="<?php echo $row['start_hour'] ?>" class='timepicker' type='time'>

                                                </div>
                                                <div>
                                                    <label>Finish Hour</label>
                                                    <input name ='Fhour' value="<?php echo $row['finish_hour'] ?>" class='timepicker' type='time'>

                                                </div>
                                                <div>
                                                    <label>Weekday</label>
                                                    <?php
                                                    echo" <select name='editweekday'> <option value='seg'";
                                                    if ($diasSemana[$row['weekday']] == 'seg')
                                                        echo " selected";
                                                    echo ">seg</option>";

                                                    echo"<option value='ter'";
                                                    if ($diasSemana[$row['weekday']] == 'ter')
                                                        echo " selected";
                                                    echo ">ter</option>";

                                                    echo"<option value='qua'";
                                                    if ($diasSemana[$row['weekday']] == 'qua')
                                                        echo " selected";
                                                    echo ">qua</option>";

                                                    echo"<option value='qui'";
                                                    if ($diasSemana[$row['weekday']] == 'qui')
                                                        echo " selected";
                                                    echo ">qui</option>";

                                                    echo"<option value='sex'";
                                                    if ($diasSemana[$row['weekday']] == 'sex')
                                                        echo " selected";
                                                    echo ">sex</option>";

                                                    echo"<option value='sab'";
                                                    if ($diasSemana[$row['weekday']] == 'sab')
                                                        echo " selected";
                                                    echo ">sab</option>";

                                                    echo"<option value='dom'";
                                                    if ($diasSemana[$row['weekday']] == 'dom')
                                                        echo " selected";
                                                    echo ">dom</option>";

                                                    echo "</select> "
                                                    ?>


                                                </div>
                                            </div>
                                            <div class="row2 five">
                                                <div>
                                                    <label>Turma</label>
                                                    <input type='text' name='f' size='5' value="<?php echo $row['F'] ?>">

                                                </div>
                                                <div>
                                                    <label>Curso</label>
                                                    <input type='text' name='g' size='5' value="<?php echo $row['G'] ?>">

                                                </div>
                                                <div>
                                                    <label>Per.</label>
                                                    <input type='text' name='j' size='5' value="<?php echo $row['J'] ?> ">

                                                </div>
                                                <div>
                                                    <label>Grupo</label>
                                                    <input type='text' name='k' size='5' value="<?php echo $row['K'] ?>">

                                                </div>
                                                <div>
                                                    <label>Tipo</label>
                                                    <input type='text' name='m' size='5' value="<?php echo $row['M'] ?>">

                                                </div>
                                            </div>

                                            <?php
                                            // echo "Disc: <input type='text' name='a' size='5' value='" . $row['A'] . "'><br/><br/>";
                                            // echo "PC: <input type='text' name='b' size='5' value='" . $row['B'] . "'><br/><br/>";
                                            // echo "Ordem: <input type='text' name='c' size='5' value='" . $row['C'] . "'><br/><br/>";
                                            // echo "Max: <input type='text' name='d' size='5' value='" . $row['D'] . "'><br/><br/>";
//                                            echo "<div class='row1' > <label>Disciplina: </label><input type='text' name='l' size='15' value='" . $row['L'] . "'><br/><br/>";
//                                            echo "<label>Start Date: </label><input name ='Sdate' value=" . $row['start_date'] . " class='timepicker' type='date'><br/><br/>";
//                                            echo "</div><div class='row2' > Teacher: <input type='text' name='o' size='15' value='" . $row['O'] . "'><br/><br/></div>";
//                                            echo "Finish Date: <input name ='Fdate' value=" . $row['finish_date'] . " class='timepicker' type='date'><br/><br/>";
//                                            echo "</div><div class='row3'> Room: <input type='text' name='room' size='3' value='" . $row['room'] . "'><br/><br/>";
//                                            echo "Start Hour: <input name ='Shour' value=" . $row['start_hour'] . " class='timepicker' type='time'><br/><br/>";
//                                            echo "Finish Hour: <input name ='Fhour' value=" . $row['finish_hour'] . " class='timepicker' type='time'><br/><br/>";
                                            // echo "Sigla: <input type='text' name='e' size='5' value='" . $row['E'] . "'><br/><br/>";
//                                            echo "Weekday: <select name='editweekday'> <option value='seg'";
//                                            if ($diasSemana[$row['weekday']] == 'seg')
//                                                echo " selected";
//                                            echo ">seg</option>";
//
//                                            echo"<option value='ter'";
//                                            if ($diasSemana[$row['weekday']] == 'ter')
//                                                echo " selected";
//                                            echo ">ter</option>";
//
//                                            echo"<option value='qua'";
//                                            if ($diasSemana[$row['weekday']] == 'qua')
//                                                echo " selected";
//                                            echo ">qua</option>";
//
//                                            echo"<option value='qui'";
//                                            if ($diasSemana[$row['weekday']] == 'qui')
//                                                echo " selected";
//                                            echo ">qui</option>";
//
//                                            echo"<option value='sex'";
//                                            if ($diasSemana[$row['weekday']] == 'sex')
//                                                echo " selected";
//                                            echo ">sex</option>";
//
//                                            echo"<option value='sab'";
//                                            if ($diasSemana[$row['weekday']] == 'sab')
//                                                echo " selected";
//                                            echo ">sab</option>";
//
//                                            echo"<option value='dom'";
//                                            if ($diasSemana[$row['weekday']] == 'dom')
//                                                echo " selected";
//                                            echo ">dom</option>";
//
//                                            echo "</select><br/><br/></div>";
//
//                                            echo "</div><div class='row4'>Turma: <input type='text' name='f' size='5' value='" . $row['F'] . "'><br/><br/>";
//                                            echo "Curso: <input type='text' name='g' size='5' value='" . $row['G'] . "'><br/><br/>";
//                                            //echo "Ano: <input type='text' name='h' size='5' value='" . $row['H'] . "'><br/><br/>";
//                                            //echo "Pc: <input type='text' name='i' size='5' value='" . $row['I'] . "'><br/><br/>";
//                                            echo "Per.: <input type='text' name='j' size='5' value='" . $row['J'] . "'><br/><br/>";
//                                            echo "Grupo: <input type='text' name='k' size='5' value='" . $row['K'] . "'><br/><br/>";
//                                            echo "Tipo: <input type='text' name='m' size='5' value='" . $row['M'] . "'><br/><br/></div>";
                                            echo '<input type="hidden" name="id" value="' . $row['id'] . '"><br/><br/>';
                                            //echo '<button name="submit2" id="submit2">Confirm</button><br/>';
                                            //echo '<input type="button" value="Cancel" accept=""onclick="window.location = "adminEditSchedule.php;" /> ';
                                            ?>
                                        </div>
                                        <input type="submit" value="Confirm" name="search" />

                                </form>

                            </div>
                        </div>

                        <?php
                    }
                }
            }
            mysqli_close($conn);
            ?>
        </main>
        <footer>
        </footer>
        <script>
            jQuery(document).ready(function ($) {
                $(".clickable-row").click(function () {
                    window.location = $(this).data("href");
                });
            });
        </script>
        <script type = "text/javascript" src = "script.js" ></script>
    </body>
</html>


