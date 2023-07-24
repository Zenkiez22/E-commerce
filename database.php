<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "fashion_shine";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}
