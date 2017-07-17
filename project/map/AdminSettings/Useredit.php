<?php
require '../config.php';

session_start();

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


function removeAccents($string) {
    return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', preg_replace('~&([a-z]{1,2})(acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8'))), ' '));
}

$role = mysqli_real_escape_string($conn, $_POST['role']);
$tN = mysqli_real_escape_string($conn, $_POST['tN']);

$tN = removeAccents($tN);
if ($role == "User")
    $role = 0;
else if ($role == 'Admin')
    $role = 1;
else
    $role = 2;


$sql = "UPDATE user SET role=$role, teacherName='$tN' WHERE id=" . $_POST['id'] . ";";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<script language = "javascript">
    window.location.href = "adminEditUser.php";
</script> 


