
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
?>
<!DOCTYPE html>

<html>
    <head>

        <meta charset="UTF-8">
        <title>Edit User</title>
        <link href="normalize.min.css" rel="stylesheet" />
        <link href="style.css" rel="stylesheet" />

    </head>
    <body>
        <header>
        </header>
        <aside>
            <div class="searchWraper"><span class="btn big search">Edit User</span></div>
            <div class="navBody">

                <div class="optFiltros">
                    <input type="button" value="Back to Homepage" accept=""onclick="window.location = '../index.php';" />     
                    <form id="fForm" method="post" class="opts" name="optsFiltros" action="#"></form>

                    <div class="tab group">
                        <input id="User" class="toggle" type="checkbox" />
                        <label for="User" class="label name">
                            user
                        </label>


                        <div class="tabContent">

                            <form  id = 'formid' method="POST">
                                <div class="dropwraper">
                                    <select id = 'uname' name = "uname" value ='' > 

                                        <?php
                                        $query = mysqli_query($conn, "select * from user;");

                                        while ($row = mysqli_fetch_assoc($query)) {
                                            echo " <option> " . $row['username'] . "</option> ";
                                        }
                                        ?>

                                    </select>   
                                </div>
                                <input type="submit" value="Search" name="search" />
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container_edit_room">
                <form action="adminEditRoom.php">
                    <input type="submit" class="search__input" value="Edit Room" style="color: white; margin-top:10px;">
                </form>
            </div>
            <div class="container_edit_schedule">
                <form action="adminEditSchedule.php">
                    <input type="submit" class="search__input" value="Edit Schedule" style="color: white; margin-top:10px;">
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
                <input type="submit" class="search__input bottom_accordion" style="color: white; text-align: left;" value="<?php echo $_SESSION['username']; ?>"/>

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
            $Uname = $_POST['uname'];


            $query = mysqli_query($conn, "select * from user where username = '$Uname';");
            while ($row = mysqli_fetch_assoc($query)) {
                $UserToEdit = $row['id'];
            }

//            if (isset($_POST['search']) && !isset($_GET['edit'])) {
//                echo "<table border=1><tr><th class='col-md-2'>Id</th><th class='col-md-2'>Username</th><th class='col-md-2'>Email</th><th class='col-md-2'>Role</th><th class='col-md-1'></th></tr>";
//
//                while ($row = mysqli_fetch_assoc($query)) {
//
//
//                    echo "<tr>";
//                    echo "<td class='col-md-2'>" . $row['id'] . "</td>";
//                    echo '<td class="col-md-2">' . $row['username'] . "</td>";
//                    echo '<td class="col-md-2">' . $row['email'] . "</td>";
//                    echo '<td class="col-md-2">' . ($row['role'] == 0 ? 'User' : 'Admin') . "</td>";
//                    echo "<td class='col-md-2'>";
//                    
            ?>
            <!--                    <div class="edit">
            <?php //echo '<a href="adminEditUser.php?edit=' . $row['id'] . '">';    ?>
                                    <button type="button">
                                        Edit
                                    </button>
                                </div> -->

            <?php
//                    echo "</td>";
//
//                    // echo "</td>";
//                    echo "</tr> </table>";
//                    //  echo "</td>";
//                    
            ?>

            <?php
//                }
//            }

            if (!isset($_POST['search'])) {

                $num_rec_per_page = 10;
                if (isset($_GET["page"])) {
                    $page = $_GET["page"];
                } else {
                    $page = 1;
                };

                $start_from = ($page - 1) * $num_rec_per_page;

                $query2 = mysqli_query($conn, "select * from user LIMIT $start_from, $num_rec_per_page;");
                echo "<table class='striped' style='width:70%; '><tr><th class='col-md-1'>UserName</th><th class='col-md-1'>Email</th><th class='col-md-1'>Role</th><th class='col-md-1'>First Name</th><th class='col-md-1'>Last Name</th></tr>";
                $arRoles = array(0 => 'User', 1 => 'Admin', 2 => 'Teacher');

                while ($row2 = mysqli_fetch_assoc($query2)) {
                    $roles = $row2['role'];
                    echo "<tr>";
                    echo "<td class='col-md-2'>" . $row2['username'] . "</td>";
                    echo '<td class="col-md-2">' . $row2['email'] . "</td>";
                    echo '<td class="col-md-2">' . $arRoles[$roles] . "</td>";
                    echo '<td class="col-md-2">' . $row2['firstname'] . "</td>";
                    echo '<td class="col-md-2">' . $row2['lastname'] . "</td>";

                    echo "</tr>";
                }
                echo '</table>';
                $sql = "SELECT * FROM user";
                $rs_result = mysqli_query($conn, $sql);
                $total_records = mysqli_num_rows($rs_result);
                $total_pages = ceil($total_records / $num_rec_per_page);
                echo "<div class = 'pagination'>";
                echo "<a href='adminEditUser.php?page=1'>" . '«' . "</a> ";

                for ($i = 1; $i <= $total_pages; $i++) {

//                    echo "<a";
//
//                    echo'class="active"';
                    if ($page == $i) {
                        echo" <a class='active' href='adminEditUser.php?page=" . $i . "'>" . $i . "</a> ";
                    } else {
                        echo" <a href='adminEditUser.php?page=" . $i . "'>" . $i . "</a> ";
                    }
                }
                echo "<a href='adminEditUser.php?page=$total_pages'>" . '»' . "</a> ";
                echo "</div>";
            }


            if (isset($_POST['search'])) {
                ?> 

                <script> document.getElementById("formid").style.display = "none";</script>

                <?php
                $query = mysqli_query($conn, "select * from user;");

                while ($row = mysqli_fetch_assoc($query)) {
                    if ($UserToEdit == $row['id']) {
                        ?>
                        <div class="optFiltrosed2">
                            <div class ="editAdd">
                                <form action="Useredit.php" method="POST">

                                    <?php
                                    $arRoles = array(0 => 'User', 1 => 'Admin', 2 => 'Teacher');

                                    $roles = $row['role'];
                                    ?>
                                    <div class="fieldcontainer">
                                        <label><strong>Id:</strong></label>
                                        <div class="row4">
                                            <div>

                                                <?php echo $row['id']; ?>
                                            </div>

                                        </div></br>
                                        <label><strong>UserName:</strong></label>
                                        <div class="row5">
                                            <div>

                                                <?php echo $row['username']; ?>
                                            </div>

                                        </div></br>
                                        <label><strong>Email:</strong></label>
                                        <div class="row5">
                                            <div>

                                                <?php echo $row['email']; ?>
                                            </div>

                                        </div></br>

                                        <?php
                                        if ($row['role'] == 2) {
                                            ?>
                                            <label><strong>Name:</strong></label>
                                            <div class="row5">
                                                <div>

                                                    <?php echo $row['firstname'] . " " . $row['lastname']; ?>
                                                </div>

                                            </div></br>

                                            </br>

                                            <label><strong>Teacher's Name:</strong></label>


                                            <?php
                                            echo "<select name='tN'>";
                                            $q = "select distinct O from excelSchedules ;";
                                            $query2 = mysqli_query($conn, $q);
                                            //echo mysqli_num_rows($query2);
                                            while ($row2 = mysqli_fetch_assoc($query2)) {

                                                $arName = explode(" ", $row2['O']);
                                                //print_r($arName);
                                                //echo $row2['O'];
                                                if (in_array($row['firstname'], $arName) && in_array($row['lastname'], $arName)) {
                                                    // echo $row['firstname'] . $row['lastname'];
                                                    echo " <option>" . $row2['O'] . "</option>";
                                                }
                                            }
                                            echo '

                                            </select></br>';
                                        }
//                                    echo "<strong>Id:</strong> " . $row['id'] ."</br></br>";
//                                    echo "<strong>User Name:</strong> " . $row['username']."</br></br>";
//                                    echo "<strong>Email:</strong> " . $row['email']."</br></br>";

                                        echo "</br><strong>Role:</strong> <select name='role'> <option>" . "$arRoles[$roles]" . "</option> </div>";
                                        unset($arRoles[$roles]);

                                        $arRoles = array_merge(array($key => value) + $arRoles);
                                        echo "<option>" . $arRoles[0] . "</option>" . "<option>" . $arRoles[1] . "</option>" . "</select></br></br>";
                                        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                                        echo '<input type="submit" value="Confirm" name="submit2" id = "submit2" />';
                                        ?>
                                </form>
                                <?php
                                echo '<form method="POST" action="adminEditUser.php">';
                                ?>
                                <input type="button" value="Cancel" accept=""onclick="window.location = 'adminEditUser.php';" /> 
                                <?php
                                echo '</form> </div> </div>';
                            }
                        }
                    }
                    mysqli_close($conn);
                    ?>
                    </main>
                    <footer>
                    </footer>
                    <script type = "text/javascript" src = "script.js" ></script>
                    </body>
                    </html>


