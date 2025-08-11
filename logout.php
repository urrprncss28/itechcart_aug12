<?php
session_start();

// If logout is confirmed, destroy session and redirect
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_destroy();
    header("Location: logout.php"); // Change this to your login or home page
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Logout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap offline CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        body {
            background-color: #ececec;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .logout-container {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 20px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
            padding: 50px 60px;
            max-width: 900px;
            width: 100%;
        }
        .thank-you {
            font-weight: 800;
            font-size: 2.8rem;
            color: #2c3e50;
            margin-bottom: 12px;
            line-height: 1.1;
        }
        .tagline {
            font-weight: 500;
            font-size: 1.2rem;
            color: #555;
            max-width: 420px;
        }
        .info-text {
            font-size: 1.3rem;
            color: #555;
            font-weight: 600;
            line-height: 1.4;
        }
        .btn-lg-custom {
    background: linear-gradient(135deg, #ff914d, #ff6f3c);
    color: white;
    padding: 14px 36px;
    font-weight: 700;
    font-size: 1.1rem;
    border-radius: 12px;
    text-decoration: none;
    display: inline-block;
    transition: background 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 6px 15px rgba(242, 101, 34, 0.35);
    user-select: none;
    cursor: pointer;
}

.btn-lg-custom:hover,
.btn-lg-custom:focus {
    background: linear-gradient(135deg, #ff6f3c, #ff914d);
    box-shadow: 0 8px 25px rgba(242, 101, 34, 0.5);
    outline: none;
    text-decoration: none;
}

        /* Image styling */
        .image-box {
    border-radius: 18px;
    overflow: hidden;
    transition: transform 0.3s ease;
    max-width: 350px;
    height: 400px; /* fixed height to keep consistent */
    margin: auto;
    flex-shrink: 0; /* prevent shrinking on flex layouts */
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff; /* fallback background */
}

.image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 18px;
    display: block;
    user-select: none;
}

        .image-box:hover {
            transform: scale(1.05);
        }
        /* Decorative circle */
        .decorative-circle {
            position: absolute;
            top: 20%;
            left: 10%;
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, #f26522, #ff914d);
            border-radius: 50%;
            opacity: 0.15;
            pointer-events: none;
            z-index: 0;
        }
        /* Responsive tweaks */
        @media (max-width: 991.98px) {
            .decorative-circle {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="logout-container position-relative d-flex flex-wrap justify-content-between align-items-center">

        <div class="decorative-circle"></div>

        <!-- Left image column -->
        <div class="image-box col-12 col-md-5 mb-4 mb-md-0">
            <img src="images/iphone_logout.jpg" alt="Thank you illustration" />
        </div>

        <!-- Right text column -->
        <div class="col-12 col-md-7 d-flex flex-column justify-content-center">

            <h1 class="thank-you" aria-live="polite">Thank you for choosing iTech Cart!</h1>

            <p class="info-text mb-4">
                Ready to shop again? Log in to discover new deals and exclusive offers curated just for you.
            </p>

            <div class="input-group mb-3">
    <a href="login.php" 
       class="btn btn-lg w-100 fs-6" 
       style="background-color: #f26522; color: white; border: none;">
       Login
    </a>
</div>

        </div>

    </div>

    <!-- Bootstrap JS and dependencies offline if needed -->
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->

</body>
</html>
