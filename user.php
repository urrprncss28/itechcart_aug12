<?php
session_start();
include("includes/db.connection.php");

// Initialize user data in session if not set
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = [
        'profile' => '',
        'username' => '',
        'phone' => '',
        'email' => '',
        'password' => ''
    ];
}

$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
    $_SESSION['user']['profile'] = htmlspecialchars($_POST['profile']);
    $_SESSION['user']['username'] = htmlspecialchars($_POST['username']);
    $_SESSION['user']['phone'] = htmlspecialchars($_POST['phone']);
    $_SESSION['user']['email'] = htmlspecialchars($_POST['email']);
    // Only update password if not empty
    if (!empty($_POST['password'])) {
        $_SESSION['user']['password'] = htmlspecialchars($_POST['password']);
    }
    $success = true;

    // Clear the form fields after saving
    $profile = $username = $phone = $email = $password = '';
} else {
    $profile = $_SESSION['user']['profile'];
    $username = $_SESSION['user']['username'];
    $phone = $_SESSION['user']['phone'];
    $email = $_SESSION['user']['email'];
    $password = $_SESSION['user']['password'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .container {
            max-width: 700px;
            margin: 60px auto 0 auto;
            background: #fff;
            border-radius: 10px;
            /* Stronger shadow at the bottom, subtle on sides */
            box-shadow: 0 8px 0 0 #888, 0 2px 16px rgba(0,0,0,0.07);
            border: 1px solid #888;
            padding: 0;
        }
        .header {
            padding: 15px;
            background-color: #fff;
            border-bottom: 1px solid #ccc;
            display: flex;
            align-items: center;
            border-radius: 10px 10px 0 0;
        }
        .back-arrow {
            margin-right: 10px;
            font-size: 18px;
            color: #ff5500;
            text-decoration: none;
        }
        .title {
            font-size: 20px;
            font-weight: bold;
        }
        form {
            padding: 20px;
        }
        label {
            display: block;
            margin-top: 15px;
            font-size: 16px;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="tel"] {
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #fafafa;
            transition: border 0.2s;
        }
        input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus, input[type="tel"]:focus {
            border: 1.5px solid #ff5500;
            outline: none;
        }
        .save-btn, .logout {
            margin-top: 25px;
            display: block;
            width: 100%;
            padding: 14px;
            font-size: 16px;
            font-weight: bold;
            background-color: #ff5500;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background 0.2s;
        }
        .save-btn:hover, .logout:hover {
            background-color: #e04a00;
            cursor: pointer;
        }
        .success-message {
            color: #388e3c;
            background: #e8f5e9;
            border: 1px solid #c8e6c9;
            border-radius: 5px;
            padding: 10px 15px;
            margin: 20px;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>


<div class="container">
    <div class="header">
    <a href="home.php" class="back-arrow">&#8592;</a>
        <div class="title">Account</div>
    </div>

    <?php if ($success): ?>
        <div class="success-message">Your information has been updated successfully.</div>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="profile">Full Name</label>
        <input type="text" id="profile" name="profile" value="<?php echo htmlspecialchars($profile); ?>" placeholder="Enter your full name" required autocomplete="name">

        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" placeholder="Enter username" required autocomplete="username">

        <label for="phone">Phone</label>
        <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>" placeholder="Enter phone number" pattern="[0-9\-\+\s]{7,15}" autocomplete="tel">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="Enter email address" required autocomplete="email">

        <label for="password">Change Password</label>
        <div style="position:relative;">
            <input type="password" id="password" name="password" placeholder="Enter new password (leave blank to keep current)" autocomplete="new-password" style="padding-right:40px;">
            <span id="togglePassword" style="position:absolute;top:50%;right:12px;transform:translateY(-50%);cursor:pointer;">
                <i class="fa fa-eye-slash" aria-hidden="true"></i>
            </span>
        </div>

        <button type="submit" name="save" class="save-btn">Save Changes</button>
    </form>

    <form method="POST" action="logout.php" style="padding: 0 20px 20px;">
        <button type="submit" class="logout">LOG OUT</button>
    </form>
</div>

<script>
  const togglePassword = document.getElementById('togglePassword');
  const passwordInput = document.getElementById('password');
  if (togglePassword && passwordInput) {
    togglePassword.addEventListener('click', function () {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      this.innerHTML = type === 'password'
        ? '<i class="fa fa-eye-slash" aria-hidden="true"></i>'
        : '<i class="fa fa-eye" aria-hidden="true"></i>';
    });
  }
</script>
</body>
</html>