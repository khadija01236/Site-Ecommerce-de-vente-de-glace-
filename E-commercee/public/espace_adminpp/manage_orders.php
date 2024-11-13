<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit();
}
include 'db_connection.php';

$orders = mysqli_query($conn, "SELECT orders.*, users.username, products.name AS product_name FROM orders JOIN users ON orders.user_id = users.id JOIN products ON orders.product_id = products.id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Orders - Yummy</title>
    <link rel="stylesheet" href="style.css" href="https: //
stackpath.bootstrapcdn.com/
bootstrap/4.5.2/css/
bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Manage Orders</h2>
        <div class="manage-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Order Date</th>
                </tr>
                <?php while ($order = mysqli_fetch_assoc($orders)): ?>
                <tr>
                    <td><?php echo $order['id']; ?></td>
                    <td><?php echo $order['username']; ?></td>
                    <td><?php echo $order['product_name']; ?></td>
                    <td><?php echo $order['quantity']; ?></td>
                    <td><?php echo $order['total_price']; ?></td>
                    <td><?php echo $order['order_date']; ?></td>
                </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</body>
</html>