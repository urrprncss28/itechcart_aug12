<?php
include('includes/db.connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (firstname, lastname, username, email, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssss", $firstname, $lastname, $username, $email, $password);

        if ($stmt->execute()) {
            $success = "Registration successful! You can now <a href='login.php'>login</a>.";
        } else {
            $error = "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $error = "Database error: " . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Register | iTech Cart</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="bootstrap/bootstrap-5.3.7-dist/css/bootstrap.min.css">
    <style>
        :root {
            --brand:#f26522;
            --brand-dark:#d4521a;
            --card-bg: #000000ff;
            --muted:#6c757d;
        }

        body {
            background: linear-gradient(135deg,#f8f9fb,#e9edf3);
            font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            color: #222;
            margin: 0;
            padding: 40px 20px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-container {
            width: 100%;
            max-width: 1100px;
            display: flex;
            gap: 36px;
            border-radius: 18px;
            background: rgba(255,255,255,0.98);
            box-shadow: 0 14px 40px rgba(31,41,55,0.08);
            overflow: hidden;
            align-items: stretch;
        }

        /* LEFT: image + marketing */
        .register-left {
            flex: 1 1 420px;
            padding: 28px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            justify-content: center;
            align-items: center;
            background: linear-gradient(180deg, rgba(242,101,34,0.03), rgba(255,145,77,0.01));
        }

        .image-box {
            width: 100%;
            max-width: 420px;
            height: 380px;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(242,101,34,0.12);
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .thumbnail-row {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 10px;
        }
        .thumbnail {
            width: 72px;
            height: 72px;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 6px 18px rgba(15,23,42,0.06);
            border: 2px solid transparent;
            transition: transform .18s ease, border-color .18s ease;
        }
        .thumbnail img { width:100%; height:100%; object-fit: cover; display:block; }
        .thumbnail:hover { transform: translateY(-4px); }
        .thumbnail.active { border-color: rgba(242,101,34,0.9); }

        .left-copy {
            text-align: center;
            max-width: 420px;
        }
        .left-copy h2 {
            margin: 0;
            font-size: 1.6rem;
            color: #203040;
            font-weight: 700;
        }
        .left-copy p.lead {
            color: var(--muted);
            margin-top: 8px;
            font-weight: 500;
        }

        .btn-outline-brand {
            background: transparent;
            color: var(--brand);
            border: 2px solid rgba(242,101,34,0.15);
            padding: 10px 18px;
            border-radius: 10px;
            font-weight:700;
            text-decoration: none;
        }

        /* RIGHT: form */
        .register-right {
            flex: 1 1 420px;
            padding: 36px 42px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .brand-head {
            display:flex;
            align-items:center;
            gap:12px;
            margin-bottom:18px;
        }
        .brand-logo {
            width:56px;
            height:56px;
            border-radius: 10px;
            overflow:hidden;
            display:inline-block;
            box-shadow: 0 6px 18px rgba(15,23,42,0.06);
        }
        .brand-logo img { width:100%; height:100%; object-fit:cover; display:block;}
        .register-right h3 {
            margin:0;
            font-size: 1.4rem;
            font-weight:700;
            color:#1f2937;
        }
        .form-control {
            border-radius:10px;
            padding:14px 16px;
            border:1px solid #e6e6e9;
            box-shadow:none;
        }
        .btn-custom {
    background-color: #f26522;
    color: #fff;
    padding: 12px 0;
    font-size: 1.1rem;
    font-weight: 600;
    border: none;
    border-radius: 8px;
    width: 100%;
    transition: all 0.3s ease;
}

.btn-custom:hover {
    background-color: #d9541f;
    transform: translateY(-2px);
}

.btn-custom:active {
    transform: translateY(0);
}

        .small-note { color: var(--muted); font-size:0.95rem; margin-top:12px; }

        /* Responsive */
        @media (max-width: 991px) {
            .register-container { flex-direction: column; padding:12px; }
            .register-left, .register-right { padding:20px; }
            .image-box { height:260px; }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="register-container mx-auto">

        <!-- LEFT: image gallery + marketing -->
        <div class="register-left">
            <div class="image-box" aria-hidden="true">
                <!-- main image (replace with your own) -->
                <img id="mainImage" src="images/login.jpg" alt="Featured product or lifestyle" onerror="this.src='images/placeholder.jpg'">
            </div>

            <div class="thumbnail-row" role="list">
                <!-- thumbnails: change file names as needed -->
                <div class="thumbnail active" data-src="images/register_bg.jpg" role="listitem">
                    <img src="images/iphone11 (2).png" alt="thumb1">
                </div>
                <div class="thumbnail" data-src="images/product2.jpg" role="listitem">
                    <img src="images/iphone_logout.jpg" alt="thumb2">
                </div>
                <div class="thumbnail" data-src="images/product3.jpg" role="listitem">
                    <img src="images/iphone13promax.webp" alt="thumb3">
                </div>
            </div>

            <div class="left-copy">
                <h2>Welcome to iTech Cart</h2>
                <p class="lead">Sign up and unlock exclusive member deals. New arrivals, flash sales, and handpicked tech — all in one place.</p>

                <div class="left-ctas">
                </div>
            </div>
        </div>

        <!-- RIGHT: registration form -->
        <div class="register-right">
            <div class="brand-head">
                <div class="brand-logo">
                    <img src="images/login.jpg" alt="iTech Cart logo" onerror="this.style.display='none'">
                </div>
                <div>
                    <h3>Create your account</h3>
                    <div class="small-note">Join thousands of happy customers — quick signup, secure checkout.</div>
                </div>
            </div>

            <?php if (isset($success)): ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php elseif (isset($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="POST" action="register.php" class="mt-3">
                <div class="mt-3">
                    <input type="text" name="firstname" class="form-control" placeholder="First name" required>
                </div>

                <div class="mt-3">
                    <input type="text" name="lastname" class="form-control" placeholder="Last name" required>
                </div>

                <div class="mt-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>

                <div class="mt-3">
                    <input type="email" name="email" class="form-control" placeholder="Email address" required>
                </div>

                <div class="mt-3">
                    <input type="password" name="password" class="form-control" placeholder="Create a password" required>
                </div>

                <div class="mt-4 d-grid">
                    <button type="submit" class="btn btn-custom">Register</button>
                </div>

                <div class="mt-3 small-note">
                    By registering you agree to our <a href="terms.php">Terms</a> & <a href="privacy.php">Privacy Policy</a>.
                </div>

                <p class="mt-3 text-center">Already have an account? <a href="login.php">Login here</a></p>
            </form>

        </div>
    </div>
</div>

<script>
    // thumbnail click -> swap main image
    document.querySelectorAll('.thumbnail').forEach(function (thumb) {
        thumb.addEventListener('click', function () {
            var src = thumb.getAttribute('data-src');
            var main = document.getElementById('mainImage');
            if (src) {
                main.src = src;
            }
            document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
            thumb.classList.add('active');
        });
    });
</script>

</body>
</html>
