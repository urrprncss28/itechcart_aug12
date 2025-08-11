<?php
session_start();
include("includes/db.connection.php");

// Save selected items from cart.php POST to session
if (isset($_POST['selected_items']) && is_array($_POST['selected_items'])) {
    $_SESSION['selected_items'] = $_POST['selected_items'];
}

// Use selected items from session (fallback)
$selected_ids = $_SESSION['selected_items'] ?? [];

// Redirect if no selected items
if (empty($selected_ids)) {
    header("Location: cart.php");
    exit();
}

// Filter cart items based on selected IDs
$selected_cart = [];
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        if (in_array($item['id'], $selected_ids)) {
            $selected_cart[] = $item;
        }
    }
}

if (empty($selected_cart)) {
    header("Location: cart.php");
    exit();
}

// Calculate subtotal
$total = 0;
foreach ($selected_cart as $item) {
    $price = floatval(str_replace(',', '', $item['price']));
    $subtotal = $price * $item['quantity'];
    $total += $subtotal;
}

// Default shipping fee
$shipping_fee = 150;

// Get voucher from GET to allow voucher selection without losing items
$selected_voucher = isset($_GET['voucher']) ? $_GET['voucher'] : "";

// Calculate discount based on voucher
$discount = 0;
switch ($selected_voucher) {
    case "DISCOUNT₱500":
        $discount = 500;
        break;
    case "DISCOUNT₱1000":
        $discount = 1000;
        break;
    case "FREESHIPPING":
        $shipping_fee = 0;
        break;
    case "FREESHIP500":
        $shipping_fee = 0;
        $discount = 500;
        break;
    case "FREESHIP1000":
        $shipping_fee = 0;
        $discount = 1000;
        break;
}

// Grand total calculation
$grand_total = $total + $shipping_fee - $discount;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Checkout</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    body {
        background: linear-gradient(135deg, #f8f9fb, #e9edf3);
        font-family: "Inter", "Segoe UI", sans-serif;
        color: #333;
        padding: 40px 15px;
    }

    .checkout-wrapper {
        max-width: 700px;
        margin: auto;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 28px rgba(0,0,0,0.05);
        padding: 35px;
    }

    .checkout-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .checkout-header h2 {
        font-weight: 700;
        color: #1e293b;
        letter-spacing: -0.5px;
    }

    .btn-back {
        display: inline-block;
        margin-bottom: 20px;
        font-size: 0.9rem;
        color: #555;
        text-decoration: none;
        transition: color 0.2s;
    }
    .btn-back:hover {
        color: #ff5722;
    }

    .order-summary {
        background: #ffffff;
        padding: 24px;
        border-radius: 16px;
        margin-bottom: 28px;
        font-family: "Poppins", "Segoe UI", sans-serif;
        font-size: 0.96rem;
        line-height: 1.5;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.06);
        border: 1px solid #f0f0f0;
        color: #2c3e50;
        transition: box-shadow 0.2s ease-in-out;
    }

    .order-summary:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    }

    .order-summary h3 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 16px;
        color: #1a1a1a;
        border-bottom: 1px solid #f2f2f2;
        padding-bottom: 8px;
    }

    .order-summary p {
        margin: 6px 0;
        display: flex;
        justify-content: space-between;
        font-weight: 400;
        color: #4a4a4a;
    }

    .order-summary p strong {
        font-weight: 600;
        color: #2c3e50;
    }

    .order-summary .total-price {
        margin-top: 18px;
        font-size: 1.15rem;
        font-weight: 700;
        color: #2c3e50;
        letter-spacing: 0.3px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 10px;
        border-top: 1px solid #f0f0f0;
    }

    .order-summary .total-price span:last-child {
        color: #2c3e50;
        font-size: 1.2rem;
    }

    label {
        font-weight: 500;
        margin-bottom: 6px;
        display: block;
    }

    input.form-control, textarea.form-control, select.form-control {
        border-radius: 8px;
        padding: 10px 12px;
        font-size: 0.95rem;
        width: 100%;
        border: 1px solid #ccc;
        background: #fafafa;
        transition: all 0.2s ease;
        box-sizing: border-box;
        resize: none;
    }
    input.form-control:focus, textarea.form-control:focus, select.form-control:focus {
        outline: none;
        border-color: #ff5722;
        background: #fff;
    }

    .btn-checkout {
        background: linear-gradient(135deg, #ff7a45, #ff5722);
        border: none;
        font-size: 1rem;
        padding: 12px 0;
        border-radius: 8px;
        color: white;
        font-weight: 600;
        letter-spacing: 0.3px;
        box-shadow: 0 4px 12px rgba(255, 87, 34, 0.2);
        transition: all 0.2s ease-in-out;
        cursor: pointer;
        width: 100%;
    }
    .btn-checkout:hover {
        background: linear-gradient(135deg, #ff5722, #ff7a45);
    }

    select.form-control {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url("data:image/svg+xml;charset=US-ASCII,%3csvg%20width%3d%2210%22%20height%3d%227%22%20viewBox%3d%220%200%2010%207%22%20xmlns%3d%22http://www.w3.org/2000/svg%22%3e%3cpath%20d%3d%22M0%200l5%207%205-7z%22%20fill%3d%22%23333%22/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-size: 10px 7px;
        padding-right: 30px;
        cursor: pointer;
    }

    @media (max-width: 600px) {
        .checkout-wrapper {
            padding: 25px 20px;
        }
    }
  </style>
</head>
<body>
<div class="checkout-wrapper">
  <div class="checkout-header">
    <h2>Checkout</h2>
  </div>

  <a href="cart.php" class="btn btn-outline-dark mb-3">⬅ Back to Shop</a>

  <div class="order-summary">
    <h3>Order Summary</h3>
    <?php foreach ($selected_cart as $item):
        $price = floatval(str_replace(',', '', $item['price']));
        $subtotal = $price * $item['quantity'];
    ?>
      <p>
        <span><?= htmlspecialchars($item['name']) ?> × <?= $item['quantity'] ?></span>
        <strong>₱<?= number_format($subtotal, 2) ?></strong>
      </p>
    <?php endforeach; ?>

    <p><span>Subtotal</span> <strong>₱<?= number_format($total, 2) ?></strong></p>
    <p><span>Shipping Fee</span> <strong>₱<?= number_format($shipping_fee, 2) ?></strong></p>
    <p><span>Discount</span> <strong>-₱<?= number_format($discount, 2) ?></strong></p>

    <div class="total-price">
      <span>Total</span>
      <span>₱<?= number_format($grand_total, 2) ?></span>
    </div>
  </div>

  <!-- Voucher selection form -->
  <form method="GET" style="margin-bottom: 20px;">
    <label for="voucher">Voucher Code:</label>
    <select name="voucher" id="voucher" class="form-control" onchange="this.form.submit()">
      <option value="">-- Select Voucher --</option>
      <optgroup label="Regular Discounts">
        <option value="DISCOUNT₱500" <?= $selected_voucher==="DISCOUNT₱500" ? "selected" : "" ?>>₱500 Off</option>
        <option value="DISCOUNT₱1000" <?= $selected_voucher==="DISCOUNT₱1000" ? "selected" : "" ?>>₱1000 Off</option>
        <option value="FREESHIP" <?= $selected_voucher==="FREESHIP" ? "selected" : "" ?>>Free Shipping Only</option>
      </optgroup>
      <optgroup label="Free Shipping + Discount">
        <option value="FREESHIP500" <?= $selected_voucher==="FREESHIP500" ? "selected" : "" ?>>Free Shipping + ₱500 Off</option>
        <option value="FREESHIP1000" <?= $selected_voucher==="FREESHIP1000" ? "selected" : "" ?>>Free Shipping + ₱1000 Off</option>
      </optgroup>
    </select>
  </form>

  <form id="checkoutForm" method="POST" action="place_order.php">
    <label for="fullname">Full Name:</label>
    <input id="fullname" type="text" name="fullname" required placeholder="Full name" class="form-control" />

    <label for="address">Address:</label>
    <textarea id="address" name="address" rows="3" required placeholder="Delivery address" class="form-control"></textarea>

    <br />

    <label for="paymentMethod">Payment Method:</label>
    <select name="payment_method" id="paymentMethod" required class="form-control">
      <option value="">-- Select Payment Method --</option>
      <option value="COD">Cash on Delivery</option>
      <option value="GCash">GCash</option>
    </select>

    <input type="hidden" name="voucher" value="<?= htmlspecialchars($selected_voucher) ?>" />

    <!-- Hidden inputs for totals -->
    <input type="hidden" name="shipping_fee" value="<?= $shipping_fee ?>" />
    <input type="hidden" name="discount" value="<?= $discount ?>" />
    <input type="hidden" name="grand_total" value="<?= number_format($grand_total, 2, '.', '') ?>" />
    <input type="hidden" name="total_amount" value="<?= number_format($total, 2, '.', '') ?>" />

    <!-- Pass selected item IDs -->
    <?php foreach ($selected_ids as $id): ?>
      <input type="hidden" name="selected_items[]" value="<?= htmlspecialchars($id) ?>" />
    <?php endforeach; ?>

    <br />

    <button type="submit" class="btn-checkout">Place Order</button>
  </form>
</div>

<script>
  const form = document.getElementById("checkoutForm");
  const paymentMethod = document.getElementById("paymentMethod");

  form.addEventListener("submit", function(event) {
    if(paymentMethod.value === "GCash") {
      form.action = "gcash1.php";
    } else {
      form.action = "place_order.php";
    }
  });
</script>

</body>
</html>
