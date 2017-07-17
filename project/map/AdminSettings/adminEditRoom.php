
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
        <title>Edit Room</title>
        <link href="normalize.min.css" rel="stylesheet" />
        <link href="style.css" rel="stylesheet" />

    </head>
    <body>
        <header>
        </header>
        <aside>
            <div class="searchWraper"><span class="btn big search">Edit Room</span></div>
            <div class="navBody">

                <div class="optFiltros">
                    <input type="button" value="Back to Homepage" accept=""onclick="window.location = '../index.php';" />     
                    <form id="fForm" method="post" class="opts" name="optsFiltros"></form>

                    <div class="tab group">
                        <input id="User" class="toggle" type="checkbox" />
                        <label for="User" class="label name">
                            select Room
                        </label>


                        <div class="tabContent">
                            <form  id = 'formid' method="POST">
                                <div class="input-field col s12">
                                    <div class = "dropwraper">
                                        <select id = 'room' name = "room" > 
                                            <?php
                                            $query = mysqli_query($conn, "select * from room;");
                                            while ($row = mysqli_fetch_assoc($query)) {

                                                echo " <option value= " . $row['number'] . "> " . $row['number'] . "</option> ";
                                            }
                                            ?>
                                        </select>
                                    </div></div>
                                <input type="submit" value="Search" name="search" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_edit_user">
                <form action="adminEditUser.php">
                    <input type="submit" class="search__input" value="Edit User" style="color: white; margin-top:10px;">
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
            $roomNr = $_POST['room'];


            $query = mysqli_query($conn, "select * from room where number = '$roomNr';");
            while ($row = mysqli_fetch_assoc($query)) {
                $roomToEdit = $row['id'];
            }

//            if (isset($_POST['search']) && !isset($_GET['edit'])) {
//                
//                echo "<table class='striped' style='width:70%;'><tr><th class='col-md-1'>Number</th><th class='col-md-1'>Capacity</th><th class='col-md-1'>Plug</th><th class='col-md-1'>Video Projector</th><th class='col-md-1'>Architects Table</th><th class='col-md-1s'>Floor</th><th class='col-md-1'></th></tr>";
//
//                while ($row = mysqli_fetch_assoc($query)) {
//
//
//                    echo "<tr>";
//                    echo "<td class='col-md-2'>" . $row['number'] . "</td>";
//                    echo '<td class="col-md-2">' . $row['capacity'] . "</td>";
//                    echo '<td class="col-md-2">' . ($row['plug'] == 0 ? 'No' : 'Yes') . "</td>";
//                    echo '<td class="col-md-2">' . ($row['video_projector'] == 0 ? 'No' : 'Yes') . "</td>";
//                    echo '<td class="col-md-2">' . ($row['architects_table'] == 0 ? 'No' : 'Yes') . "</td>";
//                    echo '<td class="col-md-2">' . $row['floor'] . "</td>";
//                    echo "<td class='col-md-2'>";
//                    
            ?>
            <!--                    <div class="edit">
            <?php //echo '<a href="adminEditRoom.php?edit=' . $row['id'] . '">';  ?>
                                    <button type="button">
                                        Edit
                                    </button>
                                </div> -->

            <?php
//                    echo "</td>";
//
//                     echo "</tr> </table>";
//              
//                    
            ?>
            <!--            if (isset($_POST['search']) && !isset($_GET['edit'])) {
                            echo "<table class='striped' style='width:70%;'><tr><th class='col-md-1'>Number</th><th class='col-md-1'>Capacity</th><th class='col-md-1'>Plug</th><th class='col-md-1'>Video Projector</th><th class='col-md-1'>Architects Table</th><th class='col-md-1'>Floor</th><th class='col-md-1'></th></tr>";
            
                            while ($row = mysqli_fetch_assoc($query)) {-->


            <?php
//                }
//           }

            if (!isset($_POST['search'])) {
                $query2 = mysqli_query($conn, "select * from room;");
                echo "<table class='striped' style='width:70%;'><tr><th class='col-md-1'>Number</th><th class='col-md-1'>Capacity</th><th class='col-md-1'>Plug</th><th class='col-md-1'>Video Projector</th><th class='col-md-1'>Architects Table</th><th class='col-md-1s'>Floor</th><th class='col-md-1'></th></tr>";

                while ($row2 = mysqli_fetch_assoc($query2)) {
                    echo "<tr>";
                    echo "<td class='col-md-2'>" . $row2['number'] . "</td>";
                    echo '<td class="col-md-2">' . $row2['capacity'] . "</td>";
                    echo '<td class="col-md-2">' . ($row2['plug'] == 0 ? 'No' : 'Yes') . "</td>";
                    echo '<td class="col-md-2">' . ($row2['video_projector'] == 0 ? 'No' : 'Yes') . "</td>";
                    echo '<td class="col-md-2">' . ($row2['architects_table'] == 0 ? 'No' : 'Yes') . "</td>";
                    echo '<td class="col-md-2">' . $row2['floor'] . "</td>";
                    echo "</tr>";
                }
                echo '</table>';
            }

            if (isset($_POST['search'])) {
                ?> 

                <script> document.getElementById("formid").style.display = "none";</script>

                <?php
                $query = mysqli_query($conn, "select * from room;");
                while ($row = mysqli_fetch_assoc($query)) {
                    if ($roomToEdit == $row['id']) {
                        ?>
                        <div class="optFiltrosed2">
                            <div class ="editAdd">

                                <form action = "Roomedit.php" method="POST">
                                    <?php
                                    echo "Number: <input type='text' name='number' size='5' value='" . $row['number'] . "'></br></br>";
                                    echo "Capacity: <input type='text' name='capacity' size='5' value='" . $row['capacity'] . "'></br></br>";
                                    echo "Plug: <select name='editPlug'> <option>" . ($row['plug'] == 0 ? 'No' : 'Yes') . "</option><option>" . ($row['plug'] != 0 ? 'No' : 'Yes') . "</option></select></br></br>";
                                    echo "Video Projector: <select name='editProjector'> <option>" . ($row['video_projector'] == 0 ? 'No' : 'Yes') . "</option><option>" . ($row['video_projector'] != 0 ? 'No' : 'Yes') . "</option></select></br></br>";
                                    echo "Architects Table: <select name='editArchitects'> <option>" . ($row['architects_table'] == 0 ? 'No' : 'Yes') . "</option><option>" . ($row['architects_table'] != 0 ? 'No' : 'Yes') . "</option></select></br></br>";
                                    echo "Floor: <input type='text' name='floor' size='5' value='" . $row['floor'] . "'></br>";
                                    echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                                    echo '<input type="submit" value="Confirm" name="submit2" id = "submit2" />';
                                    //echo '<button name="submit2" id="submit2">Confirm</button>';
                                    ?>
                                </form>
                                <?php
                                echo '<form method="POST" action="adminEditRoom.php">';
                                ?>  

                                <input type="button" value="Cancel" accept=""onclick="window.location = 'adminEditRoom.php';" />    
                                <?php
                                // echo '<button id="res" name="res">Cancel</button>';
                                echo '</form>';
                                ?>
                            </div></div><?php
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


