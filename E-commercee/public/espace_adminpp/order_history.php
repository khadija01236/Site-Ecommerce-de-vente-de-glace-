<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
include 'db_connection.php';

$user_id = $_SESSION['user_id'];
$orders = mysqli_query($conn, "SELECT orders.*, products.name AS product_name FROM orders JOIN products ON orders.product_id = products.id WHERE orders.user_id = $user_id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History - Yummy</title>
    <link rel="stylesheet" href="style.css" href="https: //
stackpath.bootstrapcdn.com/
bootstrap/4.5.2/css/
bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Order History</h2>
        <div class="manage-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Order Date</th>
                </tr>
                <?php while ($order = mysqli_fetch_assoc($orders)): ?>
                <tr>
                    <td><?php echo $order['id']; ?></td>
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