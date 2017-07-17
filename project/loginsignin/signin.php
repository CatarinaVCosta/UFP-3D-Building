<?php

use SendEmail;

require '../classMail.php';
//require '../map/config.php';

if (isset($_POST['register-submit'])) {
    $conn = mysqli_connect("127.0.0.1", "root", "12345", "lpi");

    if (!$conn) {

        die("Error: " . mysqli_connect_error());
    }

    $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lname']);
    $username = mysqli_real_escape_string($conn, $_POST['username2']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $passw = $_POST['password2'];

    echo "$firstname $lastname";

    $aux = explode("@", $email);
    //echo "-" . $aux[1] . "-";
    if(ctype_digit($aux[0])) {
        $userRole=0;
    }
    else {
        $userRole=2;
    }
    if ($aux[1] != "ufp.edu.pt" && $aux[1] != "ufp.pt") {

        header('location:signinLogin.php');
        return;
    }


    $allUsers = array();
    $allEmails = array();

    $sql = "select * from user;";
    $result = mysqli_query($conn, $sql);

    $num_rows = mysqli_num_rows($result);

    if ($num_rows == 0) {
        if ($_POST['confirm-password'] == $passw) {
            $pw = crypt($passw);

            $rand = range(0, 9);
            shuffle($rand);
            $hashRand = array_slice($rand, 0, 3);
            $randHash = implode("", $hashRand);

            $timestamp = date("Y-m-d H:i:s");

            $hash .= $email . $timestamp . $randHash;

            $finalHash = sha1($hash);

            $newuser = mysqli_query($conn, "insert into user (username,email,password,hash,verify,role,firstname,lastname,toggle) values('$username','$email','$pw','$finalHash',0,$userRole,'$firstname','$lastname',1);");

            $send_email = new SendEmail($email, $url, 'user');
            $send_email->sendPWemail();
            header('location:signinLogin.php?error=activateaccount');
        }
        /*         * When passwords do not match */ else {
            header('location:signinLogin.php?error=passwordsdontmatch');
        }
    } else {

        while ($row = mysqli_fetch_assoc($result)) {
            $allUsers[] = $row['username'];
            $allEmails[] = $row['email'];
        }

        if (!in_array($username, $allUsers)) {
            if (!in_array($email, $allEmails)) {
                if ($_POST['confirm-password'] == $passw) {
                    $pw = crypt($passw);


                    $rand = range(0, 9);
                    shuffle($rand);
                    $hashRand = array_slice($rand, 0, 3);
                    $randHash = implode("", $hashRand);

                    $timestamp = date("Y-m-d H:i:s");

//                    $hash = $email . $timestamp . $randHash;
                    //                  $finalHash = sha1($hash);

                    $hash = $email . $timestamp . $randHash;

                    $finalHash = sha1($hash);

                    $newuser = mysqli_query($conn, "insert into user (username,email,password,hash,verify,role,firstname,lastname,toggle) values('$username','$email','$pw','$finalHash',0,$userRole,'$firstname','$lastname',1);");

                    $url = "localhost/projecto-lpji/loginsignin/verify.php?val=" . $finalHash;

                    $send_email = new SendEmail($email, $url, 'user');
                    $send_email->sendPWemail();
                    header('location:signinLogin.php?error=activateaccount');
                } else {
                    /** When passwords do not match */
                    header('location:signinLogin.php?error=passwordsdontmatch');
                }
            } else {
                /** When email already exists in the database */
                header('location:signinLogin.php?error=emailalreadyexists');
            }
        } else {
            /** When username already exists in the database */
            header('location:signinLogin.php?error=usernamealreadyexists');
            /* ?????? */
            session_destroy();
            header('location:signinLogin.php');
        }
    }
}
mysqli_close($conn);
