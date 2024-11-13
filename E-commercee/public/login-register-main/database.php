<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "Bace2022";
$dbName = "login_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Une erreur s'est produite;");
}
?>