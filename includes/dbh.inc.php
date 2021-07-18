<?php

$serverName = "localhost:8111";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phplogin";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
