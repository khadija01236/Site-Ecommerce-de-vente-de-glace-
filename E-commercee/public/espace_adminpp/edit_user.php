<!-- edit_user.php -->
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
    $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));

    if (isset($_POST['update_user'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];

        $query = "UPDATE users SET username = '$username', email = '$email' WHERE id = $id";
        mysqli_query($conn, $query);
        header('Location: manage_users.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User - Yummy</title>
    <link rel="stylesheet" href="style.css" href="https: //
stackpath.bootstrapcdn.com/
bootstrap/4.5.2/css/
bootstrap.min.css">
</head>
<body>
    <div class="manage-container">
        <h2>Edit User</h2>
        <form action="edit_user.php?id=<?php echo $id; ?>" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required>
            <button type="submit" name="update_user">Update User</button>
        </form>
    </div>
</body>
</html>