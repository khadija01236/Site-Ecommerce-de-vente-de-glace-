<?php
$servername = "localhost";
$username = "root";
$password = "Bace2022";
$dbname = "admin_panel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>