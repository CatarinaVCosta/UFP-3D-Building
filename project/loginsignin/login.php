<?php

use SendEmail;

require '../classMail.php';

if (isset($_POST['login-submit'])) {
    session_start();

    $conn = mysqli_connect("127.0.0.1", "root", "12345", "lpi");

    if (!$conn) {
        die("Error: " . mysqli_connect_error());
    }

    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $pw = mysqli_real_escape_string($conn, $_POST['password']);

    $query = mysqli_query($conn, "select * from user where username='$user'");

    if (mysqli_num_rows($query) == 1) {

        while ($row = mysqli_fetch_assoc($query)) {

            if (hash_equals($row['password'], crypt($pw, $row['password'])) && $row['verify'] == 1) {
                session_start();
                $_SESSION['username'] = $user;
                header('location: ../map/index.php');
            } else {
                session_destroy();
                header('location:signinLogin.php?error=invalidlogindata'); //redirecciona para pagina de login
            }
        }
    }
    elseif(isset($_POST['login-guest'])){
        session_destroy();
        header('location:../map/index.php');
    }
    else {
        session_destroy();
        header('location:signinLogin.php?error=invalidlogindata');
    }

    mysqli_close($conn);
}


if (isset($_POST['confirm'])) {
    echo $_POST['forgot'];
    $conn = mysqli_connect("127.0.0.1", "root", "12345", "lpi");

    if (!$conn) {

        die("Error: " . mysqli_connect_error());
    }



    $email = mysqli_real_escape_string($conn, $_POST['forgot']);
    $query = "select * from user where email =" . "'$email'" . ";";
    $result = mysqli_query($conn, "select * from user where email = " . "'$email'" . ";");


    if (mysqli_num_rows($result) == 0) {
        /**Forgot password: Email inserted does not exist in the db */
        header('location:signLogin.php?error=emaildoesntexist');
    } else {
        $random_pass = range('a', 'z');
        shuffle($random_pass);
        $pass = array_slice($random_pass, 0, 5);
        $passw = implode("", $pass);

        $pw = crypt($passw);

        $send_email = new SendEmail($email, $passw, 'user');
        $send_email->sendPWemail();

        $sql = mysqli_query($conn, "update user set password='" . $pw . "' where email='" . $email . "';");
        ?>
        <script>
            alert("A new password was sent to your email");
        </script>
        <?php

    }
//    while ($row = mysqli_fetch_assoc($result)) {
//
//        //echo "dentro do while";
//
//        $mail = $row['email'];
//        if ($email == $mail) {
//
//            $aux = 1;
//            $send_email = new SendEmail($email, $passw, 'user');
//            $send_email->sendPWemail();
//
//            $sql = mysqli_query($conn, "update user set password='" . $pw . "' where email='" . $email . "';");
//
//            if (!mysqli_query($conn, $sql)) {
//
//                echo("Error: " . mysqli_error());
//            }
//            
//
//            break;
//        } else {
//            $aux = 0;
//        }
//    }
//    
    ?>
    <?php //if ($aux == 0) { ?>

    <?php

}


mysqli_close($conn);
