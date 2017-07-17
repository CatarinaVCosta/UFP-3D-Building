<?php

$fh = fopen('rooms.txt','r');

$conn = mysqli_connect("127.0.0.1", "root", "12345", "lpi");

while ($line = fgets($fh)) {

    $aux=explode(",", $line);
    $room=$aux[0];
    $capacity=$aux[1];
    $plug=$aux[2];
    $projector=$aux[3];
    $architect_table=$aux[4];
    $floor=$aux[5];
   
    $sql_query = mysqli_query($conn, "insert into room(number,capacity,plug,video_projector,architects_table,floor)values('".$room."',".$capacity.",".$plug.",".$projector.",".$architect_table.",".$floor.");");
    
}
mysqli_close($conn);
fclose($fh);
?>