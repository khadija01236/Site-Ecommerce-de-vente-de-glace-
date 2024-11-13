<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit();
}
include 'db_connection.php';

$product = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    }
    $stmt->close();
}

if (!$product) {
    die("Product not found.");
}

if (isset($_POST['update_product'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $category_id = $_POST['category_id'];

    $stmt = $conn->prepare("UPDATE products SET name = ?, description = ?, price = ?, image = ?, category_id = ? WHERE id = ?");
    $stmt->bind_param("ssdsii", $name, $description, $price, $image, $category_id, $id);
    $stmt->execute();
    $stmt->close();

    header('Location: manage_products.php');
    exit();
}

$categories = mysqli_query($conn, "SELECT * FROM categories");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product - Yummy</title>
    <link rel="stylesheet" href="style.css" href="https: //
stackpath.bootstrapcdn.com/
bootstrap/4.5.2/css/
bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit Product</h2>
        <form action="edit_product.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>" required>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required><?php echo $product['description']; ?></textarea>
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" value="<?php echo $product['price']; ?>" required>
            <label for="image">Image URL:</label>
            <input type="text" id="image" name="image" value="<?php echo $product['image']; ?>" required>
            <label for="category_id">Category:</label>
            <select id="category_id" name="category_id" required>
                <?php while ($category = mysqli_fetch_assoc($categories)): ?>
                    <option value="<?php echo $category['id']; ?>" <?php if ($product['category_id'] == $category['id']) echo 'selected'; ?>>
                        <?php echo $category['name']; ?>
                    </option>
                <?php endwhile; ?>
            </select>
            <button type="submit" name="update_product">Update Product</button>
        </form>
    </div>
</body>
</html>