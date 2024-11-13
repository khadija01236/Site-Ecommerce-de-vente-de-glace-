<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit();
}
include 'db_connection.php';

// Ajouter une catégorie
if (isset($_POST['add_category'])) {
    $name = $_POST['name'];
    $stmt = $conn->prepare("INSERT INTO categories (name) VALUES (?)");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->close();
}

// Supprimer une catégorie
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM categories WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

$categories = mysqli_query($conn, "SELECT * FROM categories");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Categories - Yummy</title>
    <link rel="stylesheet" href="style.css" href="https: //
stackpath.bootstrapcdn.com/
bootstrap/4.5.2/css/
bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Manage Categories</h2>
        <div class="manage-container">
            <form action="manage_categories.php" method="POST">
                <label for="name">Category Name:</label>
                <input type="text" id="name" name="name" required>
                <button type="submit" name="add_category">Add Category</button>
            </form>

            <h3>Category List</h3>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                <?php while ($category = mysqli_fetch_assoc($categories)): ?>
                <tr>
                    <td><?php echo $category['id']; ?></td>
                    <td><?php echo $category['name']; ?></td>
                    <td>
                        <a href="manage_categories.php?delete_id=<?php echo $category['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</body>
</html>