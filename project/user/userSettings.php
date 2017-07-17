
<?php
require '../map/config.php';

session_start();
//
////Caso o usuário não esteja autenticado, limpa os dados e redireciona
//if (!isset($_SESSION['username'])) {
////Destrói
//    session_destroy();
//
////Limpa
//    unset($_SESSION['username']);
//
//
////Redireciona para a página de autenticação
//    header('location:../loginsignin/signinLogin.html');
//    
//}

$name = $_SESSION['username'];

$query = mysqli_query($conn, "select * from user where username='$username';");

while ($row = mysqli_fetch_assoc($query)) {
    $user_id = $row['id'];
}


?>
<!DOCTYPE html>

<html>
    <head>

        <meta charset="UTF-8">
        <title>Edit User</title>
        <link href="normalize.min.css" rel="stylesheet" />
        <link href="style2.css" rel="stylesheet" />


    </head>
    <body>
        <header>
        </header>
        <aside>
            <div class="searchWraper"><span class="btn big search">Edit User</span></div>
            <div class="navBody">

                <div class="optFiltros">
                    <input type="button" value="Back to Homepage" accept=""onclick="window.location = '../map/index.php';" />     
                    <form id="fForm" method="post" class="opts" name="optsFiltros" action="#"></form>
                </div>
            </div>
        </aside>


        <h2>View Reservation History</h2>
        <a name = "viewHistory" style="display: block;"></a>
        <?php
        $query = "select r.start_hour, r.finish_hour, r.room, r.id, r.date,r.validation from reservation r, user u where u.username='$name' and u.id=r.user_id;";
        $sql = mysqli_query($conn, $query);
        ?>
        <form method="POST"> 
            <div id="table-wrapper">
                <div id="table-scroll">
                    <?php
                    echo "<table border=1><tr><th class='col-md-1'>Room</th><th class='col-md-1'>Date</th><th class='col-md-1'>Start Hour</th><th class='col-md-1'>Finish Hour</th><th class='col-md-1'>Validation</th><th class='col-md-1'><input type = 'submit' value = 'Remove' name='Remove'/></th></tr>";
                    while ($row = mysqli_fetch_assoc($sql)) {

                        if (strtotime($row['date']) > strtotime("now")) {
                            echo "<tr> ";
                        } else {
                            echo "<tr class='tr_disable'>";
                        }

                        echo "<td class='col-md-1'>" . $row['room'] . "</td>";
                        echo "<td class='col-md-1'>" . $row['date'] . "</td>";
                        echo "<td class='col-md-1'>" . $row['start_hour'] . "</td>";
                        echo "<td class='col-md-1'>" . $row['finish_hour'] . "</td>";
                        echo "<td class='col-md-1'>"; 
                        if ($row['validation'] == 1) {
                            echo "Approved";
                        } else
                            echo"Not Approved";
                         "</td>";
                        echo "<td class='col-md-1'>";

                        if (strtotime($row['date']) > strtotime("now")) {
                            ?>

                            <div class="remove">
                                <input name='checkRemove[]' value="<?php echo $row['id']; ?>" type="checkbox" />
                            </div> 

                        <?php } else {
                            ?>
                            <div class = "remove">
                                <input name = 'checkRemove[]' value = "<?php echo $row['id']; ?>" type = "checkbox"disabled />
                            </div> <?php
                        }
                        echo "</td>";

                        echo"</tr>";
                    }
                    echo "</table>";
                    ?> </div></div> </form> <?php
        if (isset($_POST['Remove'])) {


            foreach ($_POST['checkRemove'] as $key => $value) {

                $query = mysqli_query($conn, "delete from reservation where id = $value");
            }
            header('location:userSettings.php');
        }
        ?>
        </br></br></br></br></br></br></br></br></br></br></br></br>
        <h2>Change Password</h2>
        <a name = "changePw" style="display: block;">
            <div class = "container">
                <form action = "" method = "POST">
                    Actual Password: <br><input type = "password" name = "senha" value = "" autofocus = "" required = "" /><br><br>
                    New Password: <br><input type = "password" name = "passw" value = "" required = ""/><br><br>
                    Confirm New Password: <br><input type = "password" name = "passw2" value = "" required = ""/><br><br>

                    <button id = "submit" name='submit'>Submit</button>
                </form>
            </div>
        </a>

        <?php
        $sql_query = mysqli_query($conn, "select password from user where username=" . "'$name'" . ";");

        while ($row = mysqli_fetch_assoc($sql_query)) {

            if (isset($_POST['submit'])) {
                if ($_POST['passw'] == $_POST['passw2']) {
                    $pw = crypt($_POST['passw']);

                    if (hash_equals($row['password'], crypt($_POST['senha'], $row['password']))) {
                        $sql_update = mysqli_query($conn, "update user set password='$pw' where username=" . "'$name'" . ";");
                        ?>
                        <script>
                            alert("Password changed");
                            window.location.href = '../map/index.php';
                        </script>
                        <?php
                    } else {
                        ?>
                        <script>
                            alert("Invalid password");
                            window.location.href = 'userSettings.php#changePw';
                        </script>
                        <?php
                        break;
                    }
                } else {
                    ?>
                    <script>
                        alert("Password doesn't match");
                        window.location.href = 'userSettings.php#changePw';
                    </script>
                    <?php
                    break;
                }
            }
        }
        mysqli_close($conn);
        ?>


        <footer>

        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script type = "text/javascript" src = "script.js" ></script>
    </body>
</html>





