<?php
session_start();
require 'mycart.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    $stmt = $pdo->prepare("INSERT INTO cart (product_id, quantity) VALUES (:product_id, :quantity)");
    $stmt->execute(['product_id' => $product_id, 'quantity' => $quantity]);

    echo json_encode(['message' => 'Produit ajouté au panier !']);
}
?>
