<?php

$dbhostname = "localhost";
$dbservername = "root";
$dbpassword = "";
$dbname = "facture";

$conn = mysqli_connect($dbhostname, $dbservername, $dbpassword, $dbname);

if (!$conn) {
    echo "Connection failed".mysqli_connect_error();
    
}