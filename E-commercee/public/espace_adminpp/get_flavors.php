<?php

include 'db_connection.phpphp';

$category_id = $_GET['category_id'];

$flavors = mysqli_query($conn, "SELECT id, name FROM flavors WHERE category_id = $category_id");
while ($flavor = mysqli_fetch_assoc($flavors)) {
    echo '<option value="' . $flavor['id'] . '">' . $flavor['name'] . '</option>';
}
?>


