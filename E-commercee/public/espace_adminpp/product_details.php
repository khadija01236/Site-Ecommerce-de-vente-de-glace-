<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST['submit_review'])) {
    $product_id = $_POST['product_id'];
    $user_id = $_SESSION['user_id'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    $stmt = $conn->prepare("INSERT INTO reviews (product_id, user_id, rating, comment) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiis", $product_id, $user_id, $rating, $comment);
    $stmt->execute();
    $stmt->close();
}
?>
<form action="product_details.php?id=<?php echo $product_id; ?>" method="POST">
    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
    <label for="rating">Rating:</label>
    <select name="rating" id="rating" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <label for="comment">Comment:</label>
    <textarea name="comment" id="comment" required></textarea>
    <button type="submit" name="submit_review">Submit Review</button>
</form>
<?php
$product_id = $_GET['id'];
$reviews = mysqli_query($conn, "SELECT reviews.*, users.username FROM reviews JOIN users ON reviews.user_id = users.id WHERE reviews.product_id = $product_id");
?>
<h3>Reviews</h3>
<?php while ($review = mysqli_fetch_assoc($reviews)): ?>
    <div>
        <strong><?php echo $review['username']; ?></strong>
        <span><?php echo str_repeat('★', $review['rating']); ?></span>
        <p><?php echo $review['comment']; ?></p>
    </div>
<?php endwhile; ?>