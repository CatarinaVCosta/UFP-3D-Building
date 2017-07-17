<?php

require '../config.php';
session_start();
                       
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

$query = "update excelSchedules set A = '$a', B='$b', C='$c',D='$d', E='$e', F='$f',G='$g',H='$h', I='$i', J='$j', K='$k',L='$l', M='$m', O='$o', weekday='$weekday', start_hour='$Shour',finish_hour='$Fhour', room='$room', start_date = '$Sdate', finish_date = '$Fdate' where id=" .$id. ";";
mysqli_query($conn, $query);
mysqli_close($conn);
?>
<script language = "javascript">
    window.location.href = "adminEditSchedule.php";
</script> 