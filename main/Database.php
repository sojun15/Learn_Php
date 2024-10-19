<?php

$localserver = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = new mysqli($localserver, $username, $password, $database);
// $conn = @mysqli_connect($localserver, $username, $password, $database);

if ($conn == false) {
    echo 'connection failed<br>';
}
