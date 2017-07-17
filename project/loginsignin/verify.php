<?php

$conn = mysqli_connect("127.0.0.1", "root", "12345", "lpi");

if (!$conn) {

    die("Error: " . mysqli_connect_error());
}

$link = $_GET['val'];

$result = mysqli_query($conn, "select * from user;");

while ($row = mysqli_fetch_assoc($result)) {
    $hash = $row['hash'];
    $verify = $row['verify'];

    if ($link == $hash) {
        $updateVerify = mysqli_query($conn, "update user set verify=1 where hash='" . $link . "';");
    }
}

header('location:signinLogin.php');

mysqli_close($conn);




