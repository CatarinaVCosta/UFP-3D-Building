<?php
session_start();
require '../config.php';

$queryRole = "select role from user where username='" . $_SESSION['username'] . "';";
$sqlRole = mysqli_query($conn, $queryRole);

while ($row = mysqli_fetch_assoc($sqlRole)) {
    $userRole = $row['role'];
    //$toggle = $row['show'];
}
if ($userRole != 1) {
    session_unset();
    header('location:../../loginsignin/signinLogin.php');
}
?>
<html>
    <head>

        <meta charset="UTF-8">
        <title>Add Class</title>
        <link href="normalize.min.css" rel="stylesheet" />
        <link href="style.css" rel="stylesheet" />

    </head>
    <body>
        <header>
        </header>
        <aside>
            <div class="searchWraper"><span class="btn big search">Add Class</span></div>
            <div class="optFiltros">

                <div class="navBody">
                    <input type="button" value="Back to Edit Schedule" accept=""onclick="window.location = 'adminEditSchedule.php';" /> 

                </div>
                <div class="navBody">
                    <input type="button" value="Back to Homepage" accept=""onclick="window.location = '../index.php';" /> 

                </div>
            </div>
        </aside>
        <main>
            <?php ?>
            <div class="optFiltrosed">
                <div class ="editAdd">
                    <form method="POST">
                        <div class="row">
                            <div class ="kol-1">
                                <?php
                                echo "Disc: <input type='text' name='a' size='5'><br/><br/>";
                                echo "PC: <input type='text' name='b' size='5' ><br/><br/>";
                                echo "Ordem: <input type='text' name='c' size='5' ><br/><br/>";
                                echo "Max: <input type='text' name='d' size='5''><br/><br/>";
                                echo "Sigla: <input type='text' name='e' size='5' ><br/><br/>";
                                echo "Turma: <input type='text' name='f' size='5' ><br/><br/>";
                                echo "Curso: <input type='text' name='g' size='5' ><br/><br/>";
                                echo "Ano: <input type='text' name='h' size='5'><br/><br/>";
                                echo "Pc: <input type='text' name='i' size='5' ><br/><br/>";
                                echo "Per.: <input type='text' name='j' size='5' ><br/><br/></div>";
                                echo "<div class='kol-2'></div><div class='kol-3'>Grupo: <input type='text' name='k' size='5' ><br/><br/>";
                                echo "Disciplina: <input type='text' name='l' size='15' ><br/><br/>";
                                echo "Tipo: <input type='text' name='m' size='5' ><br/><br/>";
                                echo "Weekday: <select name='editweekday'> <option>seg</option>"
                                . "<option>ter</option> <option>qua</option> <option>qui</option><option>sex</option><option>sab</option><option>dom</option></select><br/><br/>";

                                echo "Start Hour: <input name ='Shour' class='timepicker' type='time'><br/><br/>";
                                echo "Finish Hour: <input name ='Fhour' class='timepicker' type='time'><br/><br/>";
                                echo "Room: <input type='text' name='room' size='5'><br/><br/>";
                                echo "Start Date: <input name ='Sdate'  class='timepicker' type='date'><br/><br/>";
                                echo "Finish Date: <input name ='Fdate' class='timepicker' type='date'><br/><br/>";
                                echo "Teacher: <input type='text' name='o' size='15' '><br/><br/></div>";
                                echo '<input type="submit" value="Confirm" name="search" /> ';
                                ?>
                                </form>
                            </div>
                        </div>
                </div>
                <?php
                if (isset($_POST['search'])) {
                    //print_r($_POST);
                    $a = mysqli_real_escape_string($conn, $_POST['a']);
                    $b = mysqli_real_escape_string($conn, $_POST['b']);
                    $c = mysqli_real_escape_string($conn, $_POST['c']);
                    $d = mysqli_real_escape_string($conn, $_POST['d']);
                    $e = mysqli_real_escape_string($conn, $_POST['e']);
                    $f = mysqli_real_escape_string($conn, $_POST['f']);
                    $g = mysqli_real_escape_string($conn, $_POST['g']);
                    $h = mysqli_real_escape_string($conn, $_POST['h']);
                    $i = mysqli_real_escape_string($conn, $_POST['i']);
                    $j = mysqli_real_escape_string($conn, $_POST['j']);
                    $k = mysqli_real_escape_string($conn, $_POST['k']);
                    $l = mysqli_real_escape_string($conn, $_POST['l']);
                    $m = mysqli_real_escape_string($conn, $_POST['m']);
                    $editweekday = mysqli_real_escape_string($conn, $_POST['editweekday']);
                    $Shour = mysqli_real_escape_string($conn, $_POST['Shour']);
                    $Fhour = mysqli_real_escape_string($conn, $_POST['Fhour']);
                    $room = mysqli_real_escape_string($conn, $_POST['room']);
                    $Sdate = mysqli_real_escape_string($conn, $_POST['Sdate']);
                    $Fdate = mysqli_real_escape_string($conn, $_POST['Fdate']);
                    $o = mysqli_real_escape_string($conn, $_POST['o']);
                    $id = mysqli_real_escape_string($conn, $_POST['id']);

                    $diasSemana = array(0 => 'dom', 1 => 'seg', 2 => 'ter', 3 => 'qua', 4 => 'qui', 5 => 'sex', 6 => 'sab');
                    $weekday = array_search($editweekday, $diasSemana);

                    if ($Sdate == "")
                        $query = "insert into excelSchedules (A,B,C,D,E,F,G,H,I,J,K,L,M,O,weekday,start_hour,finish_hour,room,start_date,finish_date) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$o','$weekday','$Shour','$Fhour','$room',null,'$Fdate');";

                    if ($Fdate == "")
                        $query = "insert into excelSchedules (A,B,C,D,E,F,G,H,I,J,K,L,M,O,weekday,start_hour,finish_hour,room,start_date,finish_date) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$o','$weekday','$Shour','$Fhour','$room','$Sdate',null);";

                    if ($Fdate == "" && $Sdate == "")
                        $query = "insert into excelSchedules (A,B,C,D,E,F,G,H,I,J,K,L,M,O,weekday,start_hour,finish_hour,room,start_date,finish_date) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$o','$weekday','$Shour','$Fhour','$room',null,null);";

                    if ($Fdate != "" && $Sdate != "")
                        $query = "insert into excelSchedules (A,B,C,D,E,F,G,H,I,J,K,L,M,O,weekday,start_hour,finish_hour,room,start_date,finish_date) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$o','$weekday','$Shour','$Fhour','$room','$Sdate','$Fdate');";

                    //echo $query;
                    mysqli_query($conn, $query);
                    header('location:adminEditSchedule.php');
                }
                ?>
        </main>

        <footer>
        </footer>
        <script type = "text/javascript" src = "script.js" ></script>
    </body>
</html>