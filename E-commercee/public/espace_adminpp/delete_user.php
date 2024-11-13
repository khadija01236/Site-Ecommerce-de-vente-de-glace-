<!-- delete_user.php -->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit();
}
include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id = $id";
    mysqli_query($conn, $query);
    header('Location: manage_users.php');
}
?>