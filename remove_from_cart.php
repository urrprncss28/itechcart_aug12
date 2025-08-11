<?php
include("includes/db.connection.php");
session_start();

if (isset($_SESSION['cart']) && isset($_GET['id'])) {
    $product_id = $_GET['id'];

    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $product_id) {
            // Remove the item completely
            unset($_SESSION['cart'][$key]);
            // Reindex array to avoid gaps
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            break;
        }
    }
}

header("Location: cart.php");
exit();
?>
