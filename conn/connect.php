<?php
$servername = "localhost";
$username = "igoalplu_allbet-789_com";
$password = "allbet-789-com";
$database = "igoalplu_allbet_789_com";



$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_query($conn, "SET NAMES 'utf8'");
if (!$conn) {
    printf("Errormessage: %s\n", $mysqli->error);
}

