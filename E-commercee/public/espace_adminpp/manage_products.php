<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit();
}
include 'db_connection.php';

if (isset($_POST['add_product'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $category_id = $_POST['category_id'];

    $stmt = $conn->prepare("INSERT INTO products (name, description, price, image, category_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdsi", $name, $description, $price, $image, $category_id);
    $stmt->execute();
    $stmt->close();

    $_SESSION['notification'] = "Product added successfully.";
    header('Location: manage_products.php');
    exit();
}

$where_clauses = [];
$search = '';
$category_id = '';

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $where_clauses[] = "(products.name LIKE '%$search%' OR products.description LIKE '%$search%')";
}

if (isset($_GET['category_id']) && $_GET['category_id'] != '') {
    $category_id = $_GET['category_id'];
    $where_clauses[] = "products.category_id = $category_id";
}

$where_sql = '';
if (count($where_clauses) > 0) {
    $where_sql = 'WHERE ' . implode(' AND ', $where_clauses);
}

$products = mysqli_query($conn, "SELECT products.*, categories.name AS category_name FROM products JOIN categories ON products.category_id = categories.id $where_sql");
$categories = mysqli_query($conn, "SELECT * FROM categories");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products - Yummy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Manage Products</h2>

        <?php if (isset($_SESSION['notification'])): ?>
            <div class="alert alert-info">
                <?php echo $_SESSION['notification']; ?>
                <?php unset($_SESSION['notification']); ?>
            </div>
        <?php endif; ?>

        <div class="manage-container">
            <form action="manage_products.php" method="GET">
                <input type="text" name="search" value="<?php echo $search; ?>" placeholder="Search products">
                <select name="category_id">
                    <option value="">All Categories</option>
                    <?php while ($category = mysqli_fetch_assoc($categories)): ?>
                        <option value="<?php echo $category['id']; ?>" <?php if ($category_id == $category['id']) echo 'selected'; ?>>
                            <?php echo $category['name']; ?>
                        </option>
                    <?php endwhile; ?>
                </select>
                <button type="submit">Search</button>
            </form>

            <form action="manage_products.php" method="POST">
                <label for="name">Product Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" required>
                <label for="image">Image URL:</label>
                <input type="text" id="image" name="image" required>
                <label for="category_id">Category:</label>
                <select id="category_id" name="category_id" required>
                    <?php mysqli_data_seek($categories, 0); while ($category = mysqli_fetch_assoc($categories)): ?>
                        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                    <?php endwhile; ?>
                </select>
                <button type="submit" name="add_product">Add Product</button>
            </form>

            <h3>Product List</h3>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
                <?php while ($product = mysqli_fetch_assoc($products)): ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    [11:21, 26/06/2024] Saly: <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>"></td>
                <td><?php echo $product['category_name']; ?></td>
                <td>
                    <a href="edit_product.php?id=<?php echo $product['id']; ?>">Edit</a>
                    <a href="delete_product.php?id=<?php echo $product['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</div>
[11:21, 26/06/2024] Saly: </body>
</html>
