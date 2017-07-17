<!DOCTYPE html>

<html>
    <head>

        <meta charset="UTF-8">
        <title>Exemplo Form</title>
        <link href="normalize.min.css" rel="stylesheet" />
        <link href="style.css" rel="stylesheet" />

    </head>
    <body>
    </body>
</html>

<?php
session_start();

//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if (!isset($_SESSION['username']) and ! isset($_SESSION['password'])) {
//Destrói
    session_destroy();

//Limpa
    unset($_SESSION['username']);
    unset($_SESSION['password']);

//Redireciona para a página de autenticação
    header('location:../loginsignin/signinLogin.html');
}

$conn = mysqli_connect("127.0.0.1", "root", "12345", "lpi");

if (!$conn) {

    die("Error: " . mysqli_connect_error());
}

$username = $_SESSION['username'];

$query = mysqli_query($conn, "select * from user where username='$username';");

while ($row = mysqli_fetch_assoc($query)) {
    $id = $row['id'];
}

$reservation = mysqli_query($conn, "select * from reservation where user_id = $id");
?>
<form method="POST"> 
    <?php
    echo "<table class='striped' style='width:70%;'><tr><th class='col-md-1'>Room Number</th><th class='col-md-1'>Start Hour</th><th class='col-md-1'>Finish Hour</th><th class='col-md-1'>Weekday</th><th class='col-md-1'> <input type = 'submit' value = 'Remove' name='Remove'/></th></tr>";

    while ($row2 = mysqli_fetch_assoc($reservation)) {
        echo "<tr>";
        echo "<td class='col-md-1'>" . $row2['room_id'];
        echo "<td class='col-md-1'>" . $row2['start_hour'];
        echo "<td class='col-md-1'>" . $row2['finish_hour'];
        echo "<td class='col-md-1'>" . $row2['weekday'];
        echo "<td class='col-md-1'>";
        ?>

        <div class="remove">
            <input name='checkRemove[]' value="<?php echo $row['id']; ?>" type="checkbox" />
        </div> 

    <?php
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
?>
</form> 
    <?php
    if (isset($_POST['Remove'])) {

        foreach ($_POST['checkRemove'] as $key => $value) {

            $query = mysqli_query($conn, "delete from reservation where id = $value");
        }
    }
