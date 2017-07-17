<?php

// DEFINE FLAGS
$HOST = "127.0.0.1";
$USERNAME = "root";
$PASSWORD = "12345";
$SCHEMA = "lpi";

$DEBUG = 0;

// setup the DB connection
$conn = mysqli_connect($HOST, $USERNAME, $PASSWORD, $SCHEMA);

if (!$conn) {
    if (DEBUG)
        die("Error: " . mysqli_connect_error());
}
