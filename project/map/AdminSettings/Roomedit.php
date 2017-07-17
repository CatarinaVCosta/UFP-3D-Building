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

$number = mysqli_real_escape_string($conn, $_POST['number']);
$capacity = mysqli_real_escape_string($conn, $_POST['capacity']);
$editPlug = mysqli_real_escape_string($conn, $_POST['editPlug']);
$editProjector = mysqli_real_escape_string($conn, $_POST['editProjector']);
$editArchitects = mysqli_real_escape_string($conn, $_POST['editArchitects']);
$editFloor = mysqli_real_escape_string($conn, $_POST['floor']);




$editPlug = ($editPlug == 'No' ? 0 : 1);
$editProjector = ($editProjector == 'No' ? 0 : 1);
$editArchitects = ($editArchitects == 'No' ? 0 : 1);


$sql = "UPDATE room SET number='$number', capacity=$capacity,plug=$editPlug,video_projector=$editProjector,architects_table=$editArchitects,floor=$editFloor WHERE id=" . $_POST['id'] . ";";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<script language = "javascript">
    window.location.href = "adminEditRoom.php";
</script> 